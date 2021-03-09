<?php

namespace App\Http\Controllers;

use App\Models\AttributeGroup;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class AttributeGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes=AttributeGroup::paginate(10);
        return view('admin.attribute.create',compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attribute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:attributesgroup|max:255',
        ]);
        try{
            $attribute=new AttributeGroup();
            $attribute->title=$request->input('title');
            $attribute->type=$request->input('type_att');
            $attribute->save();
            Session()->put('attribute_success','ویژگی با موفقیت ثبت شد');
            return redirect('/attributes');}
        catch (\Exception $m){
            Session()->put('attribute_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/attributes');
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
        $attribute=AttributeGroup::findorfail($id);
        return view('admin.attribute.edit',compact('attribute'));
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
        $validatedData = $request->validate([
            'title' => 'required|unique:attributesgroup,title,' . $id .'|max:255',
        ]);
        try
        {
            $attribute=AttributeGroup::findorfail($id);
            $attribute->title=$request->input('title');
            if ($request->input('type_att')==true)
            $attribute->type='1';
            else
            $attribute->type='0';
            $attribute->save();
            Session()->put('attribute_success','ویژگی '.$attribute->title.' با موفقیت بروزرسانی شد');
            return redirect('/attributes');}
        catch (\Exception $m){
            Session()->put('attributes_error','خطایی در بروز رسانی وجود دارد لطفا مجددا تلاش کنید');
            return $m;
        }
    }
    public function delete($id)
    {
        try {
            $attribute = AttributeGroup::findorfail($id);
            $attribute->delete();
            Session()->put('attribute_success', 'ویژگی با موفقیت حذف شد');
            return redirect('/attributes');
        } catch (\Exception $m) {
            Session()->put('attribute_error', 'حذف صورت نگرفت');
            return redirect('/attributes');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
