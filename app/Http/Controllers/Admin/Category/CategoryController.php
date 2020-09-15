<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\DB;

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

    // название в slug
    public function slugify($text)
    {
        $text = (string) $text; // преобразуем в строковое значение
        $text = trim($text); // убираем пробелы в начале и конце строки
        $text = function_exists('mb_strtolower') ? mb_strtolower($text) : strtolower($text); // переводим строку в нижний регистр 
        $text = preg_replace('~[^\pL\d]+~u', '-', $text); // заменяем пробелы
        $text = strtr($text, ['а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>'']); //транслитерация
    
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }


    public function storeCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $this->slugify($category->name);
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
