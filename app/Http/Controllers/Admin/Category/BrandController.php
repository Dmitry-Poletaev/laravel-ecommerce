<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function brand()
    {
        $brands = Brand::all();

        return view('admin.category.brand', compact('brands'));
    }
    


    public function storeBrand(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:brands|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $data = [];
        $data['name'] = $request->name;
        $data['slug'] = Str::slug($request->name, '_');
        $image = $request->file('logo');

        if ($image) {
            $imageName = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $imageFullName = $imageName . '.' . $ext;
            $uploadPath = 'media/brand/';
            $imageUrl = $uploadPath . $imageFullName;
            $suceess = $image->move($uploadPath, $imageFullName);

            $data['logo'] = $imageUrl;
            $brand = DB::table('brands')->insert($data);

            $notification = [
                'messege' => 'Бренд успешно добавлен! ',
                'alert-type' => 'success'
                ];
            return Redirect()->back()->with($notification);
        }

    }
    
    public function deleteBrand(Brand $brand, $id)
    {
        $data = $brand->where('id', $id)->first();
        $image = $data->logo;
        unlink($image);
        $brand->where('id', $id)->delete();

        $notification = [
            'messege' => 'Бренд успешно удален! ',
            'alert-type' => 'success'
            ];
        return Redirect()->back()->with($notification);
    }

    public function editBrand($id)
    {
        $brand = DB::table('brands')->where('id', $id)->first();

        return view('admin.category.brand_edit', compact('brand'));
    }

    public function updateBrand(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|unique:brands|max:255',
        //     'logo' => 'required|image|mimes:jpeg,png,jpg',
        // ]);
        
        $oldLogo = $request->old_logo;
        $image = $request->logo;

        $data = [];
        $data['name'] = $request->name;
        
        if (!empty($image)) {
            unlink($oldLogo);
            $imageName = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $imageFullName = $imageName . '.' . $ext;
            $uploadPath = 'media/brand/';
            $imageUrl = $uploadPath . $imageFullName;
            $image->move($uploadPath, $imageFullName);

            $data['logo'] = $imageUrl;
            DB::table('brands')->where('id', $id)->update($data);

            $notification = [
                'messege' => 'Бренд успешно изменен! ',
                'alert-type' => 'success'
                ];
            return Redirect()->route('brands')->with($notification);
        } else {
            DB::table('brands')->where('id', $id)->update($data);
            $notification = [
                'messege' => 'Бренд успешно изменен! ',
                'alert-type' => 'success'
                ];
            return Redirect()->route('brands')->with($notification);
        }
    }

}
