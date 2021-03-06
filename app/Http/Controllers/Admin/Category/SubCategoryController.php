<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function subCategory()
    {
        $categories = Category::all();
        $subcat = Subcategory::all();
        
       
        return view('admin.category.subcategory', compact('categories', 'subcat'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.category.subcategory_create', compact('categories'));
    }


    public function storeSubCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:subcategories|max:255',
            'category_id' => 'required',
        ]);

        $subCategory = new Subcategory();
        $subCategory->name = $request->name;
        $subCategory->slug = Str::slug($request->name, '_');
        $subCategory->category_id = $request->category_id;
        $subCategory->save();

        $seo = [];
        $seo['subcat_id'] = $subCategory->id;
        $seo['title'] = $request->title;
        $seo['keywords'] = $request->keywords;
        $seo['description'] = $request->description;
        DB::table('seo')->insert($seo);

        $notification = [
            'messege' => 'Раздел успешно создан! ',
            'alert-type' => 'success'
            ];
        return Redirect()->route('sub.categories')->with($notification);
    }

    public function deleteSubCategory(Subcategory $subcat, $id)
    {
        $subcat->where('id', $id)->delete();

        $notification = [
            'messege' => 'Раздел  успешно удален! ',
            'alert-type' => 'success'
            ];
        return Redirect()->back()->with($notification);
    }

    public function editSubCategory($id)
    {
        $subcat = DB::table('subcategories')->where('id', $id)->first();
        $categories = Category::all();
        $seo = DB::table('seo')->where('subcat_id', $id)->first();

        return view('admin.category.subcategory_edit', compact('subcat', 'categories', 'seo'));
    }

    public function updateSubCategory(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $data = [];
        $data['name'] = $request->name;
        $data['slug'] = $this->slugify($request->name);
        $data['category_id'] = $request->category_id;
        DB::table('subcategories')->where('id', $id)->update($data);

        $seo = [];
        $seo['title'] = $request->title;
        $seo['keywords'] = $request->keywords;
        $seo['description'] = $request->description;
        DB::table('seo')->where('subcat_id', $id)->update($seo);


        $notification = [
            'messege' => 'Раздел  успешно изменен! ',
            'alert-type' => 'success'
            ];
        return Redirect()->route('sub.categories')->with($notification);
    }
    
}
