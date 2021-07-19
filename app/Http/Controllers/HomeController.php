<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

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
    public function index(Request $request)
    {
        $user = $request->user();

        //dd($user->hasRole('customer'));

        if($request->has('lang')){

            App::setLocale($request->lang);

            session()->put('locale', $request->lang); 


        }
        return view('home');
    }

    
}
