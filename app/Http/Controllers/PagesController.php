<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Package;

class PagesController extends Controller
{
    public function home()
    {
        $service = Service::get();
        return view('index', compact('service'));
    }

    public function service()
    {
        $service = Service::get();
        return view('service', compact('service'));
    }

    public function package()
    {
        $package = Package::get();
        return view('package', compact('package'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }
}
