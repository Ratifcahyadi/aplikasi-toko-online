<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        return view('home.index', compact('sliders', 'categories'));
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
        return view('home.about');
    }
    
    public function contact()
    {
        return view('home.contact');
    }
    
    public function faq()
    {
        return view('home.faq');
    }

}
