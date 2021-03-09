<?php

namespace App\Http\Controllers;

use App\Models\AttributeGroup;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributesvalue=AttributeValue::with('attributeGroup')->paginate(10);
        $attributesGroup=AttributeGroup::all();
        return view('admin.attribute-value.create',compact('attributesvalue','attributesGroup'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            $attributevalue=new AttributeValue();
            $attributevalue->title=$request->input('title');
            $attributevalue->attributeGroup_id=$request->input('attribute_group');
            $attributevalue->save();
            Session()->put('attribute-value_success','مقدار ویژگی با موفقیت ایجاد شد');
            return redirect('/attributes-value');
        }
        catch (\Exception $m){
            Session()->put('attribute-value_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/attributes-value');
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
        $attributeValue=AttributeValue::with('attributeGroup')->whereId($id)->first();
        $attributesGroup=AttributeGroup::all();
        return view('admin.attribute-value.edit',compact('attributeValue','attributesGroup'));
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
            $attributevalue=AttributeValue::findorfail($id);
            $attributevalue->title=$request->input('title');
            $attributevalue->attributeGroup_id=$request->input('attribute_group');
            $attributevalue->save();
            Session()->put('attribute-value_success','مقدار ویژگی با موفقیت بروز شد');
            return redirect('/attributes-value');
        }
        catch (\Exception $m){
            Session()->put('attribute-value_error','خطایی در ,یرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/attributes-value');
        }
    }

    public function delete($id)
    {
        try{
            $attributevalue=AttributeValue::findorfail($id);
            $attributevalue->delete();
            Session()->flash('attribute-value_success','مقدار ویژگی با موفقیت حذف شد');
            return redirect('/attributes-value');}
        catch (\Exception $m) {
            Session()->flash('attribute-value_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/attributes-value');
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
