<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities=City::with('province')->paginate(10);
        $provinces=Province::all();
        return view('admin.cities.create',compact('cities','provinces'));
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
    public function store(Request $request)
    {
        try{
            $city=new City();
            $city->name=$request->input('name');
            $city->province_id=$request->input('province_id');
            $city->save();
            Session()->put('city_success','شهر با موفقیت ثبت شد');
            return redirect('/cities');
        }
        catch (\Exception $m){
            Session()->put('city_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/cities');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinces=Province::all();
        $city=City::with('province')->whereId($id)->first();
        return view('admin.cities.edit',compact('city','provinces'));
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
            $city=City::findorfail($id);
            $city->name=$request->input('name');
            $city->province_id=$request->input('province_id');
            $city->save();
            Session()->put('city_success','شهر با موفقیت ویرایش شد');
            return redirect('/cities');
        }
        catch (\Exception $m){
            Session()->put('city_error','خطایی در ویرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/cities');
        }
    }

    /*
     *
     * Remove the specified resou
     *
     * rce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        try{
            $city=City::findorfail($id);
            $city->delete();
            Seesion()->put('city_success','شهر با موفقیت حذف شد');
            return redirect('/cities');}
        catch (\Exception $m) {
            Seesion()->put('city_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/cities');
        }

    }


    public function destroy($id)
    {
        //
    }
}
