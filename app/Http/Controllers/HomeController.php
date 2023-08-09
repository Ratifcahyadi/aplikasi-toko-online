<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Cart;
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
    
    public function products($id)
    {
        // Assuming you have a "Product" model, you can fetch the data by ID like this:
        $product = Product::find($id);

        if (!$product) {
            // Handle the case when the product is not found, for example:
            abort(404, 'Product not found');
        }

        // Pass the product data to the view
        return view('home.products', ['product' => $product]);
    }
    
    // public function products($id_product)
    // {
    //     $product = Product::where('id_subkategori', $id_subcategory)->get();
    //     return view('home.products', compact('products'));
    // }

    public function product($id_product)
    {
        $product = Product::find($id_product)->get();
        $latest_products = Product::orderByDesc('ceated_at')->offset(0)->limit(10)->get();
        return view('home.product', compact('product', latest_products));
    }

    public function add_to_cart(Request $request)
    {
        $input =  $request->all();
        Cart::create($input);
    }
    
    public function cart()
    {
        if (!Auth::guard('webmember')->user()) {
            return redirect('login_member');
        }

        $carts = Cart::where('id_member', Auth::guard('webmember')->user()->id)->get();
        // dd($carts);
        return view('home.cart', compact('carts'));
    }
    
    public function delete_from_cart(Cart $cart)
    {
        $cart->delete();
        return redirect('/cart');
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
