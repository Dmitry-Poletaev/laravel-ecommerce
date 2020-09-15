<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use App\Models\Admin\Brand;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function product()
    {
        $categories = Category::all();
        $subcat = Subcategory::all();
        $brands = Brand::all();
        $products = Product::all();
       
        return view('admin.product.product', compact('categories', 'subcat', 'brands', 'products'));
    }

    // название в slug
    // public function slugify($text)
    // {
    //     $text = (string) $text; // преобразуем в строковое значение
    //     $text = trim($text); // убираем пробелы в начале и конце строки
    //     $text = function_exists('mb_strtolower') ? mb_strtolower($text) : strtolower($text); // переводим строку в нижний регистр 
    //     $text = preg_replace('~[^\pL\d]+~u', '-', $text); // заменяем пробелы
    //     $text = strtr($text, ['а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>'']); //транслитерация
    
    //     if (empty($text)) {
    //         return 'n-a';
    //     }
    //     return $text;
    // }


    public function create()
    {    
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.product.create', compact('categories', 'brands'));
    }

    public function getSubcat($category_id)
    {
        $subcat = DB::table('subcategories')->where('category_id', $category_id)->get();

        return json_encode($subcat);
    }

    public function validateProduct($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:products|max:255',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'brand_id' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'specification' => 'required',
            'selling_price' => 'required',
            'sale' => 'max:90',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ],
        [
            'name.required' => 'Введите название товара!',
            'category_id.required' => 'Выберите категорию!',
            'subcategory_id.required' => 'Выберите раздел!',
            'brand_id.required' => 'Выберите бренд!',
            'quantity.required' => 'Введите количество товара!',
            'description.required' => 'Добавьте описание товара!',
            'specification.required' => 'Добавьте характеристики товара!',
            
        ]

        );
    }

    public function storeProduct(Request $request)
    {
        $this->validateProduct($request);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '_');
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->brand_id = $request->brand_id;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->specification = $request->specification;
        $product->selling_price = str_replace(" ", "", $request->selling_price);
        $product->sale = $request->sale < 1 ? 1 : $request->sale;
        $product->discount_price = $product->selling_price * (100 - $product->sale) / 100;
        $product->status = $request->status == 'on' ? 1 : 0;
        $product->image = $request->image;

        if ($product->image) {
            $imageName = hexdec(uniqid()) . '.' . $product->image->getClientOriginalExtension();
            Image::make($product->image)->resize(300,300)->save('media/product/'.$imageName);
            $product->image = 'media/product/' . $imageName;

            $product->save();

            $seo = [];
            $seo['product_id'] = $product->id;
            $seo['title'] = $request->title;
            $seo['keywords'] = $request->keywords;
            $seo['description'] = $request->description;
            DB::table('seo')->insert($seo);

            $notification = [
                'messege' => 'Товар успешно создан! ',
                'alert-type' => 'success'
                ];
            return Redirect()->route('products')->with($notification);
        }


    }

    public function deleteProduct($id)
    {
        $product = new Product();
        $product = $product->where('id', $id)->first();
        $image = $product->image;
        if (!empty($image)) {
            unlink($image);
        }
        
        $product->where('id', $id)->delete();

        $notification = [
            'messege' => 'Товар успешно удален! ',
            'alert-type' => 'success'
            ];
        return Redirect()->back()->with($notification);
    }

    public function editProduct($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->get();
        $brands = DB::table('brands')->get();
        $seo = DB::table('seo')->where('product_id', $id)->first();

        return view('admin.product.edit', compact('product', 'categories', 'subcategories', 'brands', 'seo'));
    }

    public function updateImage($image, $oldImage)
    {
        if (!empty($image)) {
            unlink($oldImage);
            $imageName = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $imageFullName = $imageName . '.' . $ext;
            $uploadPath = 'media/product/';
            $imageUrl = $uploadPath . $imageFullName;
            $image = $image->move($uploadPath, $imageFullName);
            $image = $imageUrl;

            return $image;
        }
    }

    public function updateProduct(Request $request, $id)
    {
        $product = [];
        $product['name'] = $request->name;
        $product['slug'] = $request->slug;
        $product['category_id'] = $request->category_id;
        $product['subcategory_id'] = $request->subcategory_id;
        $product['brand_id'] = $request->brand_id;
        $product['quantity'] = $request->quantity;
        $product['description'] = $request->description;
        $product['specification'] = $request->specification;
        $product['selling_price'] = $request->selling_price;
        $product['sale'] = $request->sale;
        $product['discount_price'] = $product['selling_price'] * (100 - $product['sale']) / 100;
        $product['status'] = $request->status == 'on' ? 1 : 0;
        
        if (!empty($request->image)) {

            $product['image'] = $this->updateImage($request->image, $request->old_image);
        }
        
        DB::table('products')->where('id', $id)->update($product);

        $seo = [];
        $seo['title'] = $request->title;
        $seo['keywords'] = $request->keywords;
        $seo['description'] = $request->description;
        DB::table('seo')->where('product_id', $id)->update($seo);


        $notification = [
            'messege' => 'Товар успешно изменнен! ',
            'alert-type' => 'success'
            ];
        return Redirect()->route('products')->with($notification);
    }
}
