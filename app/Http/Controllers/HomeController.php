<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')
;    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('home');
    }
     public function dashboard()
    {
        return view('dashboard');
    }
      public function About()
    {
        return view('dashboard');
    }
    
      public function register()
    {
        return view('auth.register');
    }
     public function login()
    {
        return view('auth.login');
    }
  
   

}