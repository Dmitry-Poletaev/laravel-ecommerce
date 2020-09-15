<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function validateSettings($request)
    {
        $validatedData = $request->validate([
            'email' => 'required|max:255',
            'phone_one' => 'required',
            'phone_two' => 'required',
            'description' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg',
        ],
        [
            'email.required' => 'Введите  email!',
            'phone_one.required' => 'Введите  телефон!',
            'phone_two.required' => 'Введите  телефон!',
            'description.required' => 'Введите описание!',
            'logo.required' => 'Выберете изображение!',
        ]

        );
    }
    
    public function updateImage($logo, $oldLogo)
    {
        unlink($oldLogo);
        $imageName = date('dmy_H_s_i');
        $ext = strtolower($logo->getClientOriginalExtension());
        $imageFullName = $imageName . '.' . $ext;
        $uploadPath = 'media/settings/';
        $imageUrl = $uploadPath . $imageFullName;
        $logo = $logo->move($uploadPath, $imageFullName);
        $logo = $imageUrl;

        return $logo;
    }

    public function siteSettings()
    { 
        $settings = DB::table('settings')->first();

        return view('admin.settings.settings', compact('settings'));
   
    }

    public function saveSettings(Request $request)
    {
        $this->validateSettings($request);

        $settings = [];
        $settings['email'] = $request->email;
        $settings['phone_one'] = $request->phone_one;
        $settings['phone_two'] = $request->phone_two;
        $settings['description'] = $request->description;

        $imageName = 'logo' . '.' . $request->logo->getClientOriginalExtension();
        Image::make($request->logo)->resize(300,300)->save('media/settings/'.$imageName);
        $request->logo = 'media/settings/' . $imageName;
        $settings['logo'] = $request->logo;

        DB::table('settings')->insert($settings);

        $notification = [
            'messege' => 'Настройки сохранены! ',
            'alert-type' => 'success'
            ];
        return redirect()->action('AdminController@index')->with($notification);

    }

    public function editSettings(Request $request)
    {
        // $this->validateSettings($request);
        $settings = [];
        $settings['email'] = $request->email;
        $settings['phone_one'] = $request->phone_one;
        $settings['phone_two'] = $request->phone_two;
        $settings['description'] = $request->description;

        if (!empty($request->logo)) {

            $settings['logo'] = $this->updateImage($request->logo, $request->old_logo);
        }

        DB::table('settings')->update($settings);
        $notification = [
            'messege' => 'Настройки сохранены! ',
            'alert-type' => 'success'
            ];
        return redirect()->action('AdminController@index')->with($notification);

    }
}
