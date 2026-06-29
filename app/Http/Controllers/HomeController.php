<?php

namespace App\Http\Controllers;

use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $mainServices = Service::where('category', 'main')->where('active', true)->orderBy('sort_order')->get();
        return view('pages.home', compact('mainServices'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $mainServices = Service::where('category', 'main')->where('active', true)->orderBy('sort_order')->get();
        $addonServices = Service::where('category', 'addon')->where('active', true)->orderBy('sort_order')->get();
        return view('pages.services', compact('mainServices', 'addonServices'));
    }

    public function pricing()
    {
        $services = Service::where('active', true)->orderBy('sort_order')->get();
        return view('pages.pricing', compact('services'));
    }

    public function booking()
    {
        $services = Service::where('active', true)->orderBy('sort_order')->get();
        return view('pages.booking', compact('services'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function bodyMap()
    {
        return view('pages.body-map');
    }
}
