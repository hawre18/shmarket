<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $slides=Slide::with('photos')->where('status',1)->get();
        $latestProduct=Product::orderby('created_at','desc')->limit(10)->get();
        $featuredProduct=Product::WhereNotNull('discount_price')->limit(10)->get();
        $bestSeller=Product::orderby('count_sells','desc')->limit(10)->get();
        return view('users.index',compact(['latestProduct','slides','featuredProduct','bestSeller','products']));
    }
    public function profile()
    {

        $user=Auth::user();
        $orders=Order::where('user_id',Auth::user()->id)->paginate(10);
        $addresses=Address::with(['city','province'])->where('user_id',Auth::user()->id)->paginate(10);
        return view('users.profile.index',compact(['user','addresses','orders']));
    }
}
