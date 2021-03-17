<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons=Coupon::paginate(10);
        return view('admin.coupons.create',compact(['coupons']));
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
        try {
            $coupon = new Coupon();
            $coupon->title = $request->title;
            $coupon->code = $request->code;
            $coupon->price = $request->price;
            $coupon->status = $request->status;
            $coupon->save();
            Session()->put('coupon_success', 'کد تخفیف با موفقیت ثبت شد');
            return redirect('coupons');
        }
        catch (\Exception $m) {
            Session()->put('coupon_error', 'خطایی در ثب به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('coupons');
        }
    }
    public function action($id,$status)
    {
        try{
            if($status==1) {
                DB::table('coupons')
                    ->where('id', $id)
                    ->update(array('status' => 1));
                Session()->put('one_status', 'کوپن با موفقیت منتشر شد');
                return redirect()->back();
            }elseif ($status==0) {
                DB::table('coupons')
                    ->where('id', $id)
                    ->update(array('status' => 0));
                Session()->put('zero_status', 'کوپن با موفقیت منقضی شد');
                return redirect()->back();
            }
        }
        catch (\Exception $m){
            Session()->put('status_error','خطایی در انجام عملیات روی  کوپن به وجود آمده لطفا مجددا تلاش کنید');
            return redirect()->back();
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
        $coupon = Coupon::findorfail($id);
        return view('admin.coupons.edit', compact(['coupon']));
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
        try {
            $coupon = Coupon::findorfail($id);
            $coupon->title = $request->title;
            $coupon->code = $request->code;
            $coupon->price = $request->price;
            $coupon->status = $request->status;
            $coupon->save();
            Session()->put('coupon_success', 'کد تخفیف با موفقیت بروز شد');
            return redirect('coupons');
        }
        catch (\Exception $m) {
            Session()->put('coupon_error', 'خطایی در ,یرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('coupons');
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
            $coupon=Coupon::findorfail($id);
            $coupon->delete();
            Session()->put('coupon_success', 'کد تخفیف با موفقیت حذف شد');
            return redirect('coupons');
        }
        catch (\Exception $m) {
            Session()->put('coupon_error', 'حذف انجام نشد');
            return redirect('coupons');
        }
    }
    public function destroy($id)
    {
        //
    }
}
