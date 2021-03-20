<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LiveSearchController extends Controller
{
    public function fetch(Request $request)
    {
        if($request->get('query')){
            $query=$request->get('query');
            $data=Product::where('title','LIKE',$request->query.'%')->get();
            $output='<ul class="search-box-inner" style="display:block;">';
            foreach ($data as $row){
                $output .='<li><a href="{{route('.'products.single'.'['.'id'.'=>'.$row->id.'])}}'.'">'.$row->title .' '. $row->sku .'</a></li>';
            }
            $output .='</ul>';
            echo $output;
        }
    }
}
