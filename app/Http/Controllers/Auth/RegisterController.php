<?php

namespace App\Http\Controllers\Auth;
use DB;
use Mail;
use Session;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use http\Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo ='/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $user= \App\Models\User::create(array(
            'user_name'=>$data['user-name'],
            'email'=>$data['user-email'],
            'password'=>Hash::make($data['user-password']),
            'email_token'=>sha1(time()),
        ));
        return $user;
    }

    public function register(Request $request)
    {
        // Laravel validation
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }
        // Using database transactions is useful here because stuff happening is actually a transaction
        // I don't know what I said in the last line! Weird!
        DB::beginTransaction();
        try {
            $user = $this->create($request->all());
            // After creating the user send an email with the random token generated in the create method above
            $email = new EmailVerification(new User(['email_token' => $user->email_token, 'user_name' => $user->user_name]));
            Mail::to($user->email)->send($email);
            DB::commit();
            Session()->put('verify_email', 'ایمیل تایید حساب کاربری برای شما ارسال شد');
            return back();
        } catch (Exception $e) {
            DB::rollback();
            return back();
        }
    }
    public function verify($token)
    {
        // The verified method has been added to the user model and chained here
        // for better readability
        User::where('email_token',$token)->firstOrFail()->verified();
        Session::flash('verified_email', 'حساب کاربری شما با موفقیت تایید شد');
        return redirect('login');
    }
}
