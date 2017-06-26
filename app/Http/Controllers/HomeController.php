<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Meal;
use App\User;
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       return view('home')->withMeals($request->user()->meals->where('created_at', '>=', date('Y-m-d').' 00:00:00'));
        
    }
}
