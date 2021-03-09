<?php

namespace App\Http\Controllers;

use App\Models\AttributeGroup;
use App\Models\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::with('childrenRecursive')
            ->where('parent_id',null)
            ->paginate(10);
        return view('admin.categories.create',compact('categories'));
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
            $category=new Category();
            $category->name=$request->input('title');
            $category->parent_id=$request->input('category_parent');
            $category->meta_title=$request->input('meta_title');
            $category->meta_desc=$request->input('meta_desc');
            $category->meta_keywords=$request->input('meta_keywords');
            $category->save();
            Session()->put('category_success','دسته بندی با موفقیت ایجاد شد');
            return redirect('/categories');}
        catch (\Exception $m){
            Session()->put('category_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/categories');
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
        $categories=Category::with('childrenRecursive')
            ->where('parent_id',null)
            ->get();
        $category=Category::findorfail($id);
        return view('admin.categories.edit',compact('categories','category'));
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
            $category=Category::findorfail($id);
            $category->name=$request->input('title');
            $category->parent_id=$request->input('category_parent');
            $category->meta_title=$request->input('meta_title');
            $category->meta_desc=$request->input('meta_desc');
            $category->meta_keywords=$request->input('meta_keywords');
            $category->save();
            Session()->put('category_success','ویرایش با موفقیت انجام شده است');
            return redirect('/categories');}
        catch (\Exception $m){
            Session()->put('category_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/categories');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        try{
            $category= Category::with('childrenRecursive')->where('id', $id)->first();
            if (count($category->childrenRecursive)>0) {
                Session()->put('error_category', 'دسته بندی '.$category->name.' دارای زیر دسته میباشد بنابراین حذف آن امکان پذیر نیست');
                return redirect('/categories');
            }
            $category->delete();
            Session()->put('category_success', 'حذف با موفقیت انجام شد');
            return redirect('/categories');}
        catch (\Exception $m) {
            Session()->put('category_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/categories');
        }
    }
    public function indexSetting($id){
        $category=Category::findorfail($id);
        $attributeGroups=AttributeGroup::all();
        return view('admin.categories.index-settings',compact(['category','attributeGroups']));
    }
    public function saveSetting(Request $request,$id){
        try{
            $category=Category::findorfail($id);
            $category->attributeGroups()->sync($request->attributeGroups);
            $category->save();
            Session()->put('category_success','عملیات با موفقیت انجام شد');
            return redirect()->to('/categories');}
        catch (\Exception $m){
            Session()->put('category_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/categories');
        }
    }

    public function destroy($id)
    {
        //
    }

    public function apiIndex()
    {
        $categories=Category::with('childrenRecursive')
            ->where('parent_id',null)
            ->get();
        $response=[
            'categories'=>$categories
        ];
        return response()->json($response,200);

    }
    public function apiIndexAttribute(Request $request)
    {
        $categories=$request->all();
        $attributeGroup=AttributeGroup::with('attributeValue','categories')
            ->whereHas('categories',function ($q) use ($categories){
                $q->whereIn('categories.id',$categories);
            })->get();
        $response=[
            'attributes'=>$attributeGroup
        ];
        return response()->json($response,200);

    }
}
