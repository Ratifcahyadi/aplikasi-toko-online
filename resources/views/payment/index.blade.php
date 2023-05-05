@extends('layouts.app')

@section('title', 'Data Pembayaran')

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
                            <th>Tanggal</th>
                            <th>Order</th>
                            <th>Jumlah</th>
                            <th>No. Rekening</th>
                            <th>Atas Nama</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade bg-glass" id="modal-form" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bg-purple-900">
            <div class="modal-header bg-gradient-linear">
                <h5 class="modal-title text-white font-weight-bold bold ">Form Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-kategori text-warning">
                            {{-- <div class="form-group">
                                <label for="">Nama Pembayaran</label>
                                <input type="text" name="nama_pembayaran" id="nama_pembayaran" placeholder="Masukkan nama pemabayaran produk..." class="form-control">
                            </div> --}}
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="text" name="tanggal" id="tanggal" placeholder="Masukkan tanggal pemabayaran produk..." class="form-control" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" name="jumlah" id="jumlah" placeholder="Masukkan jumlah pemabayaran produk..." class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">No. Rekening</label>
                                <input type="text" name="no_rekening" id="no_rekening" placeholder="Masukkan no. rekening pemabayaran produk..." class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Atas Nama</label>
                                <input type="text" name="atas_nama" id="atas_nama" placeholder="Masukkan atas_nama pemabayaran produk..." class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label class="text-danger" for="">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="DITERIMA">DITERIMA</option>
                                    <option value="DITOLAK">DITOLAK</option>
                                    <option value="MENUNGGU">MENUNGGU</option>
                                </select>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-warning btn-block btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

<script>
    $('#gambar').on('change', function(){
    console.log("upload gambar jalan gess!");
    files = $(this)[0].files; 
    name = ''; 
    for(var i = 0; i < files.length; i++)
    {
        name += '\"' + files[i].name + '\"' + (i != files.length-1 ? ", " : ""); 
    } 
    $(".custom-file-label").html(name);
    });

    $(function(){
        function rupiah(angka) {
            const format = angka.toString().split('').reverse().join('');
            const convert = format.match(/\d{1,3}/g);
            return rupiah = 'Rp ' + convert.join('.').split('').reverse().join('');
        }

        
        $.ajax({
            url: '/api/payments',
            success: function({data}) {
                let row;
                data.map(function(val, index){
                    tgl = new Date(val.created_at);
                    tgl_lengkap = `${tgl.getDate()}-${tgl.getMonth()}-${tgl.getFullYear()}`;
                    row += `
                    <tr>
                        <td>${parseInt(index)+1}</td>
                        <td>${tgl_lengkap}</td>
                        <td>${val.id_order}</td>
                        <td>${rupiah(val.jumlah)}</td>
                        <td>${val.no_rekening}</td>
                        <td>${val.atas_nama}</td>
                        <td>${val.status}</td>
                        <td>
                            <a data-toggle="modal" class="btn btn-warning modal-ubah"  href="#modal-form" data-id="${val.id}">Edit</a>
                        </td>
                    </tr>
                    `;
                });
                $('tbody').append(row);
            }
        });
        
        $(document).on('click', '.btn-hapus', function(){
                confirm_dialog = confirm('Yakin Hapus Data?');
                const id = $(this).data('id');
                const token = localStorage.getItem('token');

                if (confirm_dialog) {
                    $.ajax({
                        url: 'api/payments/' + id,
                        type: "DELETE",
                        headers: {
                            "Authorization": "Bearer " + token
                        },
                        success: function(data) {
                            if (data.message == 'success') {
                                alert('Data Berhasil Dihapus!');
                                location.reload();
                            }
                        }
                    })
                }
        });

        // $('.modal-tambah').click(function(){
        //     $('modal-form').modal('show');

        //     $('input[name="nama_kategori"]').val('');
        //     $('textarea[name="deskripsi"]').val('');

        //     $('.form-kategori').submit(function(e){
        //         e.preventDefault();

        //         const token = localStorage.getItem('token');
        //         const frmdata = new FormData(this);
    
        //         $.ajax({
        //             url: 'api/payments',
        //             type: 'POST',
        //             data: frmdata,
        //             cache: false,
        //             contentType: false,
        //             processData: false,
        //             headers: {
        //                 "Authorization": 'Bearer ' + token
        //             },
        //             success: function(data) {
        //                 // console.log(data)
        //                 // return
        //                 if (data.success) {
        //                     alert('Data Berhasil Ditambahkan!');
        //                     location.reload();
        //                 }
        //             }
        //         });
        //     });
        // });

        $(document).on('click', '.modal-ubah', function(){
            $('modal-form').modal('show');

            const id = $(this).data('id');

            function date(tanggal) {
                const tgl = new Date(tanggal);
                const hari = tgl.getDate();
                const bulan = tgl.getMonth();
                const tahun = tgl.getFullYear();

                return `${hari}-${bulan}-${tahun}`;

            }

            $.get('/api/payments/' + id, function({data}){
                $('input[name="tanggal"]').val(date(data.created_at));
                $('input[name="jumlah"]').val(data.jumlah);
                $('input[name="no_rekening"]').val(data.no_rekening);
                $('input[name="atas_nama"]').val(data.atas_nama);
                $('select[name="status"]').val(data.status);
            });

            $('.form-kategori').submit(function(e){
                e.preventDefault();

                const token = localStorage.getItem('token');
                const frmdata = new FormData(this);

                $.ajax({
                    url: `api/payments/${id}?_method=PUT`,
                    type: 'POST',
                    data: frmdata,
                    cache: false,
                    contentType: false,
                    processData: false,
                    headers: {
                        "Authorization": 'Bearer ' + token
                    },
                    success: function(data) {
                        // console.log(data)
                        // return
                        if (data.success) {
                            alert('Data Berhasil Diubah!');
                            location.reload();
                        }
                    }
                });
            });

        });

    });
</script>
@endpush