<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Subcategory;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // dd(Auth::guard('webmember')->user());

        $sliders = Slider::all();
        $categories = Category::all();
        $testimonies = Testimoni::all();
        $products = Product::skip(0)->take(30)->get();
        return view('home.index', compact('sliders', 'categories', 'testimonies', 'products'));
    }
    
    public function products()
    {
        return view('home.products');
    }
    
    
    public function product()
    {
        return view('home.product');
    }
    
    public function cart()
    {
        return view('home.cart');
    }
    
    public function checkout()
    {
        return view('home.checkout');
    }
    
    public function orders()
    {
        return view('home.orders');
    }
    
    public function about()
    {
        $about = About::first();
        $testimonies = Testimoni::all();
        return view('home.about', compact('about', 'testimonies'));
    }
    
    public function contact()
    {
        $about = About::first();
        return view('home.contact', compact('about'));
    }
    
    public function faq()
    {
        return view('home.faq');
    }

}
