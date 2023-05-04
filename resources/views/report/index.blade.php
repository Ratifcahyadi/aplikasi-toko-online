@extends('layouts.app')

@section('title', 'Laporan Pesanan')

@section('content')
    
    <div class="card shadow">
        {{-- <div class="card-header">
            <h4 class="card-title">Produk Digital</h4>
        </div> --}}
        <div class="card-body">

            <div class="row">
                <div class="col-md-4 bg-purple-50 mb-2 rounded">
                    <form action="">
                        <div class="d-flex mt-1">
                            <div class="form-group col-md-6 font-weight-normal h5 text-warning">
                                <label for="">Dari</label>
                                <input type="date" name="dari" id="dari" class="form-control" value="{{ request()->input('dari') }}">
                            </div>
                            <div class="form-group col-md-6 font-weight-normal h5 text-primary">
                                <label for="">Sampai</label>
                                <input type="date" name="sampai" id="sampai" class="form-control" value="{{ request()->input('sampai') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- @if (request()->input('dari')) --}}
                
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Jumlah Beli</th>
                            <th>Pendapatan</th>
                            <th>Total Qty</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('js')

<script>

    $(function(){


        const dari = '{{ request()->input('dari') }}'
        const sampai = '{{ request()->input('sampai') }}'

        function rupiah(angka) {
        const format = angka.toString().split('').reverse().join('');
        const convert = format.match(/\d{1,3}/g);
        return 'Rp ' + convert.join('.').split('').reverse().join('');
        }


        function date(tanggal) {
            const tgl = new Date(tanggal);
            const hari = tgl.getDate();
            const bulan = tgl.getMonth();
            const tahun = tgl.getFullYear();

            return `${hari}-${bulan}-${tahun}`;

        }

        const token = localStorage.getItem('token'); 
        $.ajax({
            url: `/api/reports?dari=${dari}&sampai=${sampai}`,
            headers: {"Authorization": 'Bearer ' + token},
            success: function({data}) {
                let row;
                data.map(function(val, index){
                    row += `
                    <tr>
                        <td>${parseInt(index)+1}</td>
                        <td>${val.nama_barang}</td>
                        <td>${rupiah(val.harga)}</td>
                        <td>${val.jumlah_dibeli}</td>
                        <td>${rupiah(val.pendapatan)}</td>
                        <td>${val.total_qty}</td>
                    </tr>
                    `;
                });
                $('tbody').append(row);
            }
        });

        $(document).on('click','.btn-aksi', function() {
            const id = $(this).data('id');

            $.ajax({
                url: '/api/pesanan/ubah_status/' + id,
                type: 'POST',
                data: {
                    status: "Dikonfirmasi"
                },
                headers: {
                    "Authorization": 'Bearer ' + token
                },
                success: function(data) {
                    location.reload();
                }
            });
        })
    });
</script>
@endpush