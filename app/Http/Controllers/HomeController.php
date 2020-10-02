<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\DB;
use App\Mail\FeedbackMail;
use Illuminate\Support\Facades\Mail;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $brands = DB::table('brands')->get();
        $settings = DB::table('settings')->first();
        $banners = DB::table('banners')->get();

        return view('pages.index', compact( 'brands', 'settings', 'banners'));
    }

    public function test()
    {
        $banners = DB::table('banners')->get();

        return view('pages.test', compact('banners'));

    }



    public function validateFeedback($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|max:100',
            'policy' => 'accepted',
        ],
        [
            'name.required' => 'Введите имя!',
            'phone.required' => 'Введите телеофн!',
            'policy.accepted' => 'Подтвердите согласие с политикой конфиденциальности!',
        ]

        );
    }


    public function changePassword(){
        return view('auth.changepassword');
    }

    public function updatePassword(Request $request)
    {
      $password = Auth::user()->password;
      $oldpass = $request->oldpass;
      $newpass = $request->password;
      $confirm = $request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user = User::find(Auth::id());
                      $user->password= Hash::make($request->password);
                      $user->save();
                      Auth::logout();  
                      $notification = [
                        'messege'=>'Пароль успешно изменен ! Теперь войдите с новым паролем',
                        'alert-type'=>'success'
                        ];
                       return Redirect()->route('login')->with($notification); 
                 }else{
                     $notification = [
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                        ];
                       return Redirect()->back()->with($notification);
                 }     
      }else{
        $notification = [
                'messege'=>'Старый пароль не совпадает!',
                'alert-type'=>'error'
                ];
               return Redirect()->back()->with($notification);
      }

    }

    public function logout()
    {
        // $logout= Auth::logout();
            Auth::logout();
            $notification = [
                'messege'=>'Successfully Logout',
                'alert-type'=>'success'
                ];
             return Redirect()->route('login')->with($notification);
       

    }

    public function feedback(Request $request)
    {
        $this->validateFeedback($request);

        Mail::to('d.poletaev@vorteil-technology.ru')->send(new FeedbackMail($request));

        $notification = [
            'messege' => 'Благодарим вас за заявку! Наши менеджеры свяжутся с вами в ближайшее время!',
            'alert-type' => 'success'
            ];
        return redirect()->back()->with($notification);
    }

}
