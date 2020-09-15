<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Category;

class FrontController extends Controller
{
    public function categoryAll()
    {
        $categories = Category::get();

        return view('pages.category_all', compact('categories',));
    }

    
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function delivery()
    {
        return view('pages.delivery');
    }

    public function warranty()
    {
        return view('pages.warranty');
    }

    public function policy()
    {
        return view('pages.policy');
    }

    public function agreement()
    {
        return view('pages.agreement');
    }

    public function exchange()
    {
        return view('pages.exchange');
    }

    public function credit()
    {
        return view('pages.credit');
    }

}
