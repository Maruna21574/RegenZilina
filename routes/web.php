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
Route::get('/co-vas-trapi', [HomeController::class, 'bodyMap'])->name('body-map');
Route::redirect('/co-vas-boli', '/co-vas-trapi', 301);
Route::get('/ochrana-sukromia', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/obchodne-podmienky', [HomeController::class, 'terms'])->name('terms');
Route::get('/cookies', [HomeController::class, 'cookies'])->name('cookies');

// Sitemap
Route::get('/sitemap.xml', function () {
    $urls = [
        [
            'loc' => url('/'),
            'priority' => '1.0',
            'changefreq' => 'weekly',
            'lastmod' => '2026-07-19',
            'images' => [
                ['url' => asset('img/foto_1.webp'), 'title' => 'Profesionálna masáž v REGEN ŽILINA'],
                ['url' => asset('img/regen_logo_new.png'), 'title' => 'REGEN ŽILINA logo'],
            ]
        ],
        [
            'loc' => url('/sluzby'),
            'priority' => '0.9',
            'changefreq' => 'weekly',
            'lastmod' => '2026-07-19',
            'images' => [
                ['url' => asset('img/pexels-koolshooters-6628615.webp'), 'title' => 'Naše masážne služby'],
            ]
        ],
        [
            'loc' => url('/cennik'),
            'priority' => '0.8',
            'changefreq' => 'monthly',
            'lastmod' => '2026-07-19',
            'images' => [
                ['url' => asset('img/pexels-koolshooters-6628690.webp'), 'title' => 'Cenník masáží a terapií'],
            ]
        ],
        [
            'loc' => url('/o-nas'),
            'priority' => '0.7',
            'changefreq' => 'monthly',
            'lastmod' => '2026-07-19',
            'images' => [
                ['url' => asset('img/foto_1.webp'), 'title' => 'Profesionálna masáž - REGEN ŽILINA'],
                ['url' => asset('img/foto_2.webp'), 'title' => 'Interiér masážneho štúdia REGEN ŽILINA'],
            ]
        ],
        [
            'loc' => url('/co-vas-trapi'),
            'priority' => '0.7',
            'changefreq' => 'monthly',
            'lastmod' => '2026-07-19',
            'images' => [
                ['url' => asset('img/pexels-joaojesusdesign-28783977.webp'), 'title' => 'Interaktívny sprievodca - Čo vás trápi'],
            ]
        ],
        [
            'loc' => url('/rezervacia'),
            'priority' => '0.9',
            'changefreq' => 'daily',
            'lastmod' => '2026-07-19',
            'images' => [
                ['url' => asset('img/pexels-joaojesusdesign-28783977.webp'), 'title' => 'Online rezervácia masáže'],
            ]
        ],
        [
            'loc' => url('/kontakt'),
            'priority' => '0.6',
            'changefreq' => 'monthly',
            'lastmod' => '2026-07-19',
            'images' => [
                ['url' => asset('img/pexels-koolshooters-6628615.webp'), 'title' => 'Kontakt na REGEN ŽILINA'],
            ]
        ],
        [
            'loc' => url('/ochrana-sukromia'),
            'priority' => '0.5',
            'changefreq' => 'yearly',
            'lastmod' => '2026-07-19',
            'images' => []
        ],
        [
            'loc' => url('/obchodne-podmienky'),
            'priority' => '0.5',
            'changefreq' => 'yearly',
            'lastmod' => '2026-07-19',
            'images' => []
        ],
        [
            'loc' => url('/cookies'),
            'priority' => '0.5',
            'changefreq' => 'yearly',
            'lastmod' => '2026-07-19',
            'images' => []
        ],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';

    foreach ($urls as $url) {
        $xml .= '<url>';
        $xml .= '<loc>' . $url['loc'] . '</loc>';
        $xml .= '<lastmod>' . $url['lastmod'] . '</lastmod>';
        $xml .= '<changefreq>' . $url['changefreq'] . '</changefreq>';
        $xml .= '<priority>' . $url['priority'] . '</priority>';

        // Pridať obrázky
        if (!empty($url['images'])) {
            foreach ($url['images'] as $image) {
                $xml .= '<image:image>';
                $xml .= '<image:loc>' . $image['url'] . '</image:loc>';
                $xml .= '<image:title>' . htmlspecialchars($image['title']) . '</image:title>';
                $xml .= '</image:image>';
            }
        }

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
    Route::get('/api/casy-terminov', [AdminController::class, 'slotTimes'])->name('admin.slot-times');
    Route::post('/blokovane-terminy', [AdminController::class, 'storeBlockedSlot'])->name('admin.blocked-slots.store');
    Route::delete('/blokovane-terminy/{blockedSlot}', [AdminController::class, 'deleteBlockedSlot'])->name('admin.blocked-slots.delete');
});
