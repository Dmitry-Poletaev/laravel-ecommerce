<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;

class ProductController extends Controller
{
    public function productView($id)
    {
        $product = Product::where('id', $id)->first();
        $categories = Category::get();
        $subcat = Subcategory::get();
        $seo = DB::table('seo')->where('product_id', $id)->first();
    
        return view('pages.product_detail', compact('product', 'categories', 'subcat', 'seo'));
    }

    public function productsAll($id, Request $request)
    {
        $subcat = DB::table('subcategories')->where('id', $id)->first();
        $category = DB::table('categories')->where('id', $subcat->category_id)->first();
        $brands = DB::table('brands')->get();
        $products = DB::table('products')->where('subcategory_id', $id)->paginate(10);
        $seo = DB::table('seo')->where('subcat_id', $id)->first();

        return view('pages.products_all', compact('products', 'subcat', 'category', 'brands', 'seo'));
    }

    public function productFilter(Request $request) {

        $brand_id = explode(',', $request->brand);
        $subcat_id = $request->subcategory;
       
        if (isset($request->brand)) {

            $products = DB::table('products')->where('subcategory_id', $subcat_id)->whereIn('brand_id', $brand_id)->paginate(10);

            response()->json($products);

            return view('pages.product_filter', compact('products'));

        } 

        if (isset($request->desc)) {

            $products = DB::table('products')->where('subcategory_id', $subcat_id)
            ->orderBy('discount_price','desc')->paginate(10);

            response()->json($products);

            return  view('pages.product_filter', compact('products'));
        }

        if (isset($request->asc)) {

            $products = DB::table('products')->where('subcategory_id', $subcat_id)
            ->orderBy('discount_price','asc')->paginate(10);

            response()->json($products);

            return  view('pages.products_filter', compact('products'));

        }
        

    }


    
}
