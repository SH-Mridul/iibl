<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public $viewPath = "Frontend/vueComponent/AboutUs"; 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function who_we_are()
    {
        $result = DB::table('who_we_ares')->orderBy('id', 'ASC')->get();
        return view($this->viewPath.'/WhoWeAre/index',compact('result'));
    }

    public function iibl_glance()
    {
        $result = DB::table('iibl_at_a_glance')->orderBy('id', 'ASC')->get();
        return view($this->viewPath.'/IiblGlance/index',compact('result'));
    }

    public function key_corporate()
    {
        $result = DB::table('key_corporate')->orderBy('id', 'ASC')->get();
        return view($this->viewPath.'/key_corporate/index',compact('result'));
    }

     public function board_of_director()
    {
        $result = DB::table('iibl_at_a_glance')->orderBy('id', 'ASC')->get();
        return view($this->viewPath.'/OrganizationalStructure/board_of_director',compact('result'));
    }
}
