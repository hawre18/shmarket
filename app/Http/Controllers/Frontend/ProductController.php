<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AttributeGroup;
use App\Models\Comment;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductByCategory($id)
    {
        $category=Category::whereId($id)->first();
        return view('users.categories.index',compact(['category']));
    }
    public function getProduct($id)
    {
        $product=Product::with(['photos','attributeValues.attributeGroup','categories'])->whereId($id)->first();
        $commentsProduct=Comment::with('user')->whereProduct_id($id)->orderBy('created_at','desc')
            ->whereStatus('1')->get();
        $relatedProducts=Product::with('categories')->whereHas('categories',function ($q)use($product){
            $q->whereIn('id',$product->categories);
        })->get();
        return view('users.product-details',compact(['product','relatedProducts','commentsProduct']));
    }
    public function apiGetProduct($id)
    {
        $products=Product::with('photos')->whereHas('categories',function ($q)use($id){
            $q->where('id',$id);
        })->paginate(10);
        $response=[
            'products'=>$products
        ];
        return response()->json($response,200);

    }
    public function apiGetCategoryAttributes($id)
    {
        $attributeGroups=AttributeGroup::with('attributeValue')
            ->whereHas('categories',function ($q)use ($id){
                $q->where('category_id',$id);
            })->get();
        $response=[
            'attributeGroups'=>$attributeGroups
        ];
        return response()->json($response,200);

    }
    public function apiGetFilterProducts($id,$sort,$paginate,$attributes)
    {
        $attributesArray=json_decode($attributes,true);
        $products=Product::with('photos')->whereHas('categories',function ($q)use($id){
            $q->where('id',$id);
        })->whereHas('attributeValues',function ($q)use ($attributesArray){
            $q->whereIn('attributeValue_id',$attributesArray);
        })
            ->orderBy('price',$sort)
            ->paginate($paginate);
        $response=[
            'products'=>$products
        ];
        return response()->json($response,200);

    }
}
