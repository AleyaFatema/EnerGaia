<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use \Auth;
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
    public function index()
    {
        $products = Product::where('supplier',Auth::user()->id)
            ->orderBy('created_at', 'asc')
            ->get(); //dd($products);
        //dump(Auth::user()->id);
        return view('home',['products'=>$products]);
    }
}
