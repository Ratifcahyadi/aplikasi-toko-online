@extends('layouts.app')

@section('title', 'Data Pesanan Dikonfirmasi')

@section('content')
    
    <div class="card shadow">
        {{-- <div class="card-header">
            <h4 class="card-title">Produk Digital</h4>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Pesanan</th>
                            <th>Invoice</th>
                            <th>Member</th>
                            <th>Total</th>
                            <th>Aksi</th>
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

        function rupiah(angka) {
            const format = angka.toString().split('').reverse().join('');
            const convert = format.match(/\d{1,3}/g);
            return rupiah = 'Rp ' + convert.join('.').split('').reverse().join('');
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
            url: '/api/pesanan/dikonfirmasi',
            headers: {"Authorization": 'Bearer ' + token},
            success: function({data}) {
                let row;
                data.map(function(val, index){
                    row += `
                    <tr>
                        <td>${parseInt(index)+1}</td>
                        <td>${date(val.created_at)}</td>
                        <td>${val.invoice}</td>
                        <td>${val.member.nama_member}</td>
                        <td>${rupiah(val.grand_total)}</td>
                        <td>
                            <a class="btn btn-warning rounded-pill btn-aksi" href="#" data-id="${val.id}">Kemas</a>
                        </td>
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
                    status: "Dikemas"
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