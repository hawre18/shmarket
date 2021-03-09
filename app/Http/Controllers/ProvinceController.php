<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces=Province::paginate(10);
        return view('admin.provinces.create',compact('provinces'));
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
            $province=new Province();
            $province->name=$request->input('name');
            $province->save();
            Session()->put('province_success','استان با موفقیت ثبت شد');
            return redirect('/province');
        }
        catch (\Exception $m){
            Session()->put('province_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/province');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $province=Province::findorfail($id)->first();
        return view('admin.provinces.edit',compact('province'));
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
            $province=Province::findorfail($id);
            $province->name=$request->input('name');
            $province->save();
            Session()->put('province_success','استان با موفقیت ویرایش شد');
            return redirect('/province');
        }
        catch (\Exception $m){
            Session()->put('province_error','خطایی در ویرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/province');
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
            $province=Province::findorfail($id);
            $province->delete();
            Session()->put('province_success','استان با موفقیت حذف شد');
            return redirect('/province');
        }
        catch (\Exception $m) {
            Session()->put('province_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/province');
        }

    }

    public function destroy($id)
    {
        //
    }
}
