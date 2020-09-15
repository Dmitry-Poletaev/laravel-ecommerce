<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MetaTag;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = !empty(trim($request->search)) ? trim($request->search) : null;
        $products = DB::table('products')->where('name', 'LIKE', '%' . $query . '%')->paginate(20);

        return view('pages.search', compact('products'));


    }

    public function autocomplete(Request $request)
    {

        $search = $request->get('search');

        $products = DB::table('products')->select('id', 'name')->where('name', 'LIKE', '%' . $search .'%')->get();

        return $products->map(function ($item) {
            return [
            'label' => $item->name,
            ];
        });
        

        
    }
}
