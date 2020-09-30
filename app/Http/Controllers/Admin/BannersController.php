<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function banners()
    {
        $banners = DB::table('banners')->get();

        return view('admin.banners.banners', compact('banners'));
    }

    public function storeBanner(Request $request)
    {
        $validatedData = $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $data = [];
        $data['url'] = $request->url;
        $image = $request->file('logo');

        if ($image) {
            $imageName = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $imageFullName = $imageName . '.' . $ext;
            $uploadPath = 'media/images/main/';
            $imageUrl = $uploadPath . $imageFullName;
            $suceess = $image->move($uploadPath, $imageFullName);

            $data['image'] = $imageUrl;
            $brand = DB::table('banners')->insert($data);

            $notification = [
                'messege' => 'Баннер успешно добавлен! ',
                'alert-type' => 'success'
                ];
            return Redirect()->back()->with($notification);
        }

    }

    public function deleteBanner($id)
    {
        $data = DB::table('banners')->where('id', $id)->first();
        $image = $data->image;
        unlink($image);
        DB::table('banners')->where('id', $id)->delete();

        $notification = [
            'messege' => 'Баннер  удален! ',
            'alert-type' => 'success'
            ];
        return Redirect()->back()->with($notification);
    }

    public function editBanner($id)
    {
        $banner = DB::table('banners')->where('id', $id)->first();

        return view('admin.banners.banner_edit', compact('banner'));
    }

    public function updateBanner(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|unique:brands|max:255',
        //     'logo' => 'required|image|mimes:jpeg,png,jpg',
        // ]);
        
        $oldLogo = $request->old_logo;
        $image = $request->logo;

        $data = [];
        $data['url'] = $request->url;
        
        if (!empty($image)) {
            unlink($oldLogo);
            $imageName = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $imageFullName = $imageName . '.' . $ext;
            $uploadPath = 'media/images/main';
            $imageUrl = $uploadPath . $imageFullName;
            $image->move($uploadPath, $imageFullName);

            $data['image'] = $imageUrl;
            DB::table('banners')->where('id', $id)->update($data);

            $notification = [
                'messege' => 'Баннер изменен! ',
                'alert-type' => 'success'
                ];
            return Redirect()->route('banners')->with($notification);
        } else {
            DB::table('banners')->where('id', $id)->update($data);
            $notification = [
                'messege' => 'Бренд успешно изменен! ',
                'alert-type' => 'success'
                ];
            return Redirect()->route('banners')->with($notification);
        }
    }
}
