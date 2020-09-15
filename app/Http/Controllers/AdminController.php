<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = DB::table('settings')->first();
        return view('admin.home', compact('settings'));
    }

    public function changePassword()
    {
        return view('admin.auth.passwordchange');
    }

    public function updatePass(Request $request)
    {
      $password = Auth::user()->password;
      $oldpass = $request->oldpass;
      $newpass = $request->password;
      $confirm = $request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user=Admin::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();  
                      $notification = [
                        'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                      ];
                       return Redirect()->route('admin.login')->with($notification); 
                 }else{
                     $notification = [
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         ];
                       return Redirect()->back()->with($notification);
                 }     
      }else{
        $notification = [
            'messege'=>'Old Password not matched!',
            'alert-type'=>'error'
            ];
          return Redirect()->back()->with($notification);
      }
    }

    public function logout()
    {
        Auth::logout();
            $notification = [
                'messege'=>'Successfully Logout',
                'alert-type'=>'success'
                ];
             return Redirect()->route('admin.login')->with($notification);
    }

}
