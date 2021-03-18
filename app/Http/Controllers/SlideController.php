<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides=Slide::with('photos')->paginate(5);
        return view('admin.slides.create',compact(['slides']));
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
            $slide=new Slide();
            $slide->title=$request->title;
            $slide->status=$request->status;
            $slide->save();
            $photos=explode(',',$request->input('photo_id')[0]);
            $slide->photos()->sync($photos);
            Session()->put('slide_success','اسلاید با موفقیت ثبت شد');
            return redirect('slides');
        }
        catch (\Exception $m){
            Session()->put('slide_error','خطایی در ثبت اسلاید به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('slides');
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
        $slide=Slide::with(['photos'])->whereId($id)->first();
        return view('admin.slides.edit',compact(['slide']));
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
            $slide=Slide::findorfail($id);
            $slide->title=$request->title;
            $slide->status=$request->status;
            $slide->save();
            $photos=explode(',',$request->input('photo_id')[0]);
            $slide->photos()->sync($photos);
            Session()->put('slide_success','اسلاید با موفقیت ویرایش شد');
            return redirect('slides');
        }
        catch (\Exception $m){
            Session()->put('slide_error','خطایی در ویرایش اسلاید به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('slides');
        }
    }

    public function delete($id)
    {
        try{
            $slide=Slide::findorfail($id);
            $slide->delete();
            Session()->put('slide_success','اسلاید با موفقیت حذف شد');
            return redirect('slides');
        }
        catch (\Exception $m){
            Session()->put('slide_error','خطایی در حذف اسلاید به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('slides');
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
