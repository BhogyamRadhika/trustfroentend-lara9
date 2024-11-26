<?php

namespace App\Http\Controllers;

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
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function boardOfDirectors()
    {
        return view('pages.boardOfDirectors');
    }
    public function boardOfAdvisors()
    {
        return view('pages.boardOfAdvisors');
    }
    public function leadershipteam()
    {
        return view('pages.leadershipteam');
    }

    public function ourDoctors()
    {
        return view('pages.ourDoctors');
    }

    public function diagnosticsolutions()
    {
        return view('pages.diagnosticsolutions');
    }
    public function blogsingle()
    {
        return view('pages.blog-single');
    }
    public function brouchers()
    {
        return view('pages.brouchers');
    }

    public function newsroom()
    {
        return view('pages.newsroom');
    }
    public function scientificPublications()
    {
        return view('pages.scientificPublications');
    }
    public function careers()
    {
        return view('pages.careers');
    }
    public function lifeAtTRUSTlab()
    {
        return view('pages.lifeAtTRUSTlab');
    }
    public function biochemistry()
    {
        return view('pages.biochemistry');
    }
    public function cart()
    {
        return view('pages.cart');
    }
    public function index()
    {
        return view('pages.index');
    }

    public function membership(){
        return view('pages.membership');
    }

    public function partnership(){
        return view('pages.partnership');
    }

    public function diagnosticexpertise(){
        return view('pages.diagnosticexpertise');
    }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }

    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }

    public function contact()
    {
        return view('pages.contact');
    }
    public function currentOpportunities()
    {
        return view('pages.currentOpportunities');
    }
}
