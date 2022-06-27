<?php

namespace App\Http\Controllers;

use App\Vestige;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    public function home()
    {
        $vestiges = Vestige::all();
        return view('home', [
            'vestiges' => $vestiges

        ]);
    }

    public function contact() {
        return view('contact');
    }


     // j'ai mis en commentaire shop et vestige ci-dessous car j'ai créé ShopController.php

    // public function shop() {
    //     return view('shop');
    // }

    // public function vestige() {
    //     return view('vestige');
    // }

    public function reservation() {
        return view('reservation');
    }

    public function checkout() {
        return view('checkout');
    }

    public function success() {
        return view('success');
    }

    public function visites() {
        return view('visites');
    }
}
