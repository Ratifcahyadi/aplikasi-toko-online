<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Subcategory;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Stringable as SupportStringable;

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
        if (!Auth::guard('webmember')->user()) {
            return redirect('login_member');
        }
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
        return view('home.product', compact('product', 'latest_products'));
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

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: 8919288a651ecac9d54c7ae7a58ee580"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        }

        $provinsi = json_decode($response);
        // dd($provinsi->rajaongkir->results);

        $carts = Cart::where('id_member', Auth::guard('webmember')->user()->id)->where('is_checkout', 0)->get();
        $cart_total = Cart::where('id_member', Auth::guard('webmember')->user()->id)->where('is_checkout', 0)->sum('total');
        // dd($carts_total);
        return view('home.cart', compact('carts', 'provinsi', 'cart_total'));
    }

    public function get_kota($id)
    {

        // dd($id);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=" . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: 8919288a651ecac9d54c7ae7a58ee580"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    public function get_ongkir($destination, $weight)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=22&destination=$destination&weight=$weight&courier=jne",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: 8919288a651ecac9d54c7ae7a58ee580"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }


    public function delete_from_cart(Cart $cart)
    {
        $cart->delete();
        return redirect('/cart');
    }

    public function checkout_orders(Request $request)
    {
        $id = DB::table('orders')->insertGetId([
            'id_member' => $request->id_member,
            // 'invoice' => SupportStringable::random(8),
            'invoice' => date('dmy'),
            'grand_total' => $request->grand_total,
            'status' => 'Baru',
            'created_at' => now()
            // 'created_at' => date('Y-m-d H:i:s')
        ]);
        for ($i = 0; $i < count($request->id_produk); $i++) {
            DB::table('order_details')->insert([
                'id_order' => $id,
                'id_produk' => $request->id_produk[$i],
                'jumlah' => $request->jumlah[$i],
                'size' => $request->size[$i],
                'color' => $request->color[$i],
                'total' => $request->total[$i],
                'created_at' => now()
            ]);
        }

        Cart::where('id_member', Auth::guard('webmember')->user()->id)->update([
            'is_checkout' => 1
        ]);
        // for ($i=0; $i < count($request->id_produk); $i++) { 
        //     DB::table('order_details')->insert([
        //         'id_order' => $id,
        //         'id_produk' => $request->id_produk[$i],
        //         'jumlah' => $request->jumlah[$i],
        //         'size' => $request->size[$i],
        //         'color' => $request->color[$i],
        //         'total' => $request->total[$i],
        //         'status' => 'Baru'
        //     ]);
        // }

        // if (
        //     is_array($request->id_produk) &&
        //     is_array($request->jumlah) &&
        //     is_array($request->size) &&
        //     is_array($request->color) &&
        //     is_array($request->total)
        // ) {
    // Periksa apakah $request->id_produk bukan null dan merupakan array
    // if (!is_null($request->id_produk) && is_array($request->id_produk)) {

        // for ($i = 0; $i < count($request->id_produk); $i++) {
        //     DB::table('order_details')->insert([
        //         'id_order' => $id,
        //         'id_produk' => $request->id_produk[$i],
        //         'jumlah' => $request->jumlah[$i],
        //         'size' => $request->size[$i],
        //         'color' => $request->color[$i],
        //         'total' => $request->total[$i],
        //         'created_at' => now()
        //     ]);
        // }

    // }
        // } 
        


    }

    public function checkout()
    {
        $about = About::first();
        $orders = Order::where('id_member', Auth::guard('webmember')->user()->id)->first();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: 8919288a651ecac9d54c7ae7a58ee580"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        }

        $provinsi = json_decode($response);
        return view('home.checkout', compact('about', 'orders', 'provinsi'));
    }

    public function payments(Request $request)
    {
        Payment::create([
            'id_order' => $request->id_order,
            'id_member' => Auth::guard('webmember')->user()->id,
            'jumlah' => $request->jumlah,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => '',
            'detail_alamat' => $request->detail_alamat,
            'status' => 'Menunggu',
            'no_rekening' => $request->no_rekening,
            'atas_nama' => $request->atas_nama,
        ]);

        return redirect('/orders');
    }

    public function orders()
    {
        $orders = Order::where('id_member', Auth::guard('webmember')->user()->id)->get();
        $payments = Payment::where('id_member', Auth::guard('webmember')->user()->id)->get();

        return view('home.orders', compact('orders', 'payments'));
        // sampai sini
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

    public function pesanan_selesai(Order $order)
    {
        $order->status = 'Selesai';
        $order->save();

        return redirect('/orders');
    }
}
