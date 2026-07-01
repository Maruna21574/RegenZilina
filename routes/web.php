<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

// Frontend pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/o-nas', [HomeController::class, 'about'])->name('about');
Route::get('/sluzby', [HomeController::class, 'services'])->name('services');
Route::get('/cennik', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/rezervacia', [HomeController::class, 'booking'])->name('booking');
Route::get('/kontakt', [HomeController::class, 'contact'])->name('contact');
Route::get('/co-vas-boli', [HomeController::class, 'bodyMap'])->name('body-map');

// Sitemap
Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => url('/'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => url('/sluzby'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['loc' => url('/cennik'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => url('/o-nas'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => url('/co-vas-boli'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => url('/rezervacia'), 'priority' => '0.9', 'changefreq' => 'daily'],
        ['loc' => url('/kontakt'), 'priority' => '0.6', 'changefreq' => 'monthly'],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach ($urls as $url) {
        $xml .= '<url>';
        $xml .= '<loc>' . $url['loc'] . '</loc>';
        $xml .= '<changefreq>' . $url['changefreq'] . '</changefreq>';
        $xml .= '<priority>' . $url['priority'] . '</priority>';
        $xml .= '</url>';
    }
    $xml .= '</urlset>';

    return response($xml, 200, ['Content-Type' => 'application/xml']);
});

// API
Route::get('/api/services', [ReservationController::class, 'getServices']);
Route::get('/api/available-slots', [ReservationController::class, 'getAvailableSlots']);
Route::post('/api/reservation', [ReservationController::class, 'store']);
Route::post('/api/contact', [ContactController::class, 'store']);
Route::post('/api/spin', [DiscountController::class, 'spin']);
Route::post('/api/discount/validate', [DiscountController::class, 'validate']);

// Admin auth
Route::get('/admin/login', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin protected
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/kalendar', [AdminController::class, 'calendar'])->name('admin.calendar');
    Route::post('/rezervacie/manualna', [AdminController::class, 'storeManualReservation'])->name('admin.reservation.store-manual');
    Route::get('/rezervacie', [AdminController::class, 'reservations'])->name('admin.reservations');
    Route::post('/rezervacie/{reservation}/potvrdit', [AdminController::class, 'confirmReservation'])->name('admin.reservation.confirm');
    Route::post('/rezervacie/{reservation}/zrusit', [AdminController::class, 'cancelReservation'])->name('admin.reservation.cancel');
    Route::get('/blokovane-terminy', [AdminController::class, 'blockedSlots'])->name('admin.blocked-slots');
    Route::post('/blokovane-terminy', [AdminController::class, 'storeBlockedSlot'])->name('admin.blocked-slots.store');
    Route::delete('/blokovane-terminy/{blockedSlot}', [AdminController::class, 'deleteBlockedSlot'])->name('admin.blocked-slots.delete');
});
