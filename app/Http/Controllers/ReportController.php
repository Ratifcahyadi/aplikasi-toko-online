<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => 'index']);
    }

    public function index(Request $request)
    {
        // dd($request->dari);


        $report = DB::table('order_details')
        ->join('products', 'products.id', '=', 'order_details.id_produk')
        ->select(DB::raw('count(*) as jumlah_dibeli, nama_barang, harga,  SUM(harga) as pendapatan, SUM(jumlah) as total_qty'))
        ->whereRaw("date(order_details.created_at) >=  '$request->dari'")
        ->whereRaw("date(order_details.created_at) <= '$request->sampai'")
        ->groupBy('id_produk', 'nama_barang', 'harga')
        ->get();
        return response()->json([
            'data' => $report
        ]);
    }
}
