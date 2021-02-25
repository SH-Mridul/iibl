<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('backend/index');
    }

    public function contentDashboard()
    {
        return view('backend/vueComponent/dashboard');
    }
}
