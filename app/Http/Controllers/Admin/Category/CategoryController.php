<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function category()
    {
        $categories = Category::all();
        
        return view('admin.category.category', compact('categories'));
    }


    public function storeCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($category->name, '_');
        $category->save();
        
        $notification = [
            'messege' => 'Категория успешно создана! ',
            'alert-type' => 'success'
            ];
        return Redirect()->back()->with($notification);
    }

    

    public function deleteCategory(Category $category, $id)
    {
        $category->where('id', $id)->delete();

        $notification = [
            'messege' => 'Категория успешно удалена! ',
            'alert-type' => 'success'
            ];
        return Redirect()->back()->with($notification);
    }

    public function editCategory($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();

        return view('admin.category.category_edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $data = [];
        $data['name'] = $request->name;
        $update = DB::table('categories')->where('id', $id)->update($data);

        if ($update) {
            $notification = [
                'messege' => 'Категория успешно изменена! ',
                'alert-type' => 'success'
                ];
            return Redirect()->route('categories')->with($notification);
        } else {
            $notification = [
                'messege' => 'Нет данных для изменений! ',
                'alert-type' => 'error'
                ];
            return Redirect()->route('categories')->with($notification);
        }
    }
}
