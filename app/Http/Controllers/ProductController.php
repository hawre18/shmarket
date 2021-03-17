<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::paginate(10);
        return view('admin.products.create',compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generateSKU()
    {
        $number=mt_rand(1000,999999);
        if ($this->checkSKU($number)){
            return $this->generateSKU();
        }
        return (string)$number;
    }
    public function checkSKU($number)
    {
        return Product::where('sku',$number)->exists();
    }

    public function store(Request $request)
    {
        try{
            $newProduct=new Product();
            $newProduct->title=$request->title;
            $newProduct->sku=$this->generateSKU();
            $newProduct->slug=$request->slug;
            $newProduct->status=$request->status;
            $newProduct->price=$request->price;
            $newProduct->discount_price=$request->discount_price;
            $newProduct->short_description=$request->short_description;
            $newProduct->long_description=$request->long_description;
            $newProduct->user_id=1;
            $newProduct->save();
            $attributes=explode(',',$request->input('attributes')[0]);
            $photos=explode(',',$request->input('photo_id')[0]);
            $newProduct->photos()->sync($photos);
            $newProduct->categories()->sync($request->categories);
            $newProduct->attributeValues()->sync($attributes);
            Session()->put('product_success','محصول با موفقیت ثبت شد');
            return redirect('/products');
        }
        catch (\Exception $m){
            return $m;
            Session()->put('product_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/products');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::with('user','photos')->whereId($id)->first();
        return view('admin.products.show',compact(['product']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::with(['attributeValues','categories','photos'])->whereId($id)->first();
        return view('admin.products.edit',compact([['product']]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $product=Product::findorfail($id);
            $product->title=$request->title;
            $product->sku=$this->generateSKU();
            $product->slug=$request->slug;
            $product->status=$request->status;
            $product->price=$request->price;
            $product->discount_price=$request->discount_price;
            $product->short_description=$request->short_description;
            $product->long_description=$request->long_description;
            $product->user_id=1;
            $product->save();
            $attributes=explode(',',$request->input('attributes')[0]);
            $photos=explode(',',$request->input('photo_id')[0]);
            $product->photos()->sync($photos);
            $product->categories()->sync($request->categories);
            $product->attributeValues()->sync($attributes);
            Session()->put('product_success','محصول با موفقیت ویرایش شد');
            return redirect('/products');
        }
        catch (\Exception $m){
            Session()->put('product_error','خطایی در ویرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/products');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        try{
            $product=Product::findorfail($id);
            $product->delete();
            Session()->put('product_success','محصول با موفقیت حذف شد');
            return redirect('/products');
        }
        catch (\Exception $m){
            Session()->put('product_error','خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/products');
        }
    }
    public function destroy($id)
    {
        //
    }
}
