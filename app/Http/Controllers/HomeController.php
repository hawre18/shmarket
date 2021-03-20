<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides=Slide::with('photos')->where('status',1)->get();
        foreach ($slides as $slide)
        $latestProduct=Product::orderby('created_at','desc')->limit(10)->get();
        $featuredProduct=Product::WhereNotNull('discount_price')->limit(10)->get();
        $bestSeller=Product::orderby('count_sells','desc')->limit(10)->get();
        $products=Product::with('photos')->where('id','=', $slide->product_id)->get();
        return view('users.index',compact(['latestProduct','slides','featuredProduct','bestSeller','products']));
    }
}
