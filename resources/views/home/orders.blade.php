@extends('layouts.home')

@section('title', 'Orders | D3-Ecommerce')

@section('content')
    <section>
        <div class="container relative mt-4">
            <div class="row">
                <div class="col-xs-12 w-100 p-2">
                    <h2>My Payments</h2>
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="text-primary">
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Nominal Transfer</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @foreach ($payments as $index => $payment)
                            <tr>
                                <td> {{$index+1}} </td>
                                <td> {{$payment->created_at}} </td>
                                <td>Rp {{number_format($payment->jumlah, 0, ',', '.')}} </td>
                                <td> {{$payment->status}} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 w-100 p-2">
                    <h2>My Orders</h2>
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="text-success">
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Grand Total</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($orders as $index => $order)
                            <tr>
                                <td> {{$index+1}} </td>
                                <td> {{$order->created_at}} </td>
                                <td>Rp {{number_format($order->grand_total, 0, ',', '.')}} </td>
                                <td> {{$order->status}} </td>
                                <td>
                                    <form action="/pesanan_selesai{{$order->id}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id_order" value="{{$order->id}}">
                                        <button class="btn btn-outline-danger rounded-pill" type="submit">Selesai</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
