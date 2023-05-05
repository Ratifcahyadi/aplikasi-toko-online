@extends('layouts.app')

@section('title', 'Data Testimoni')

@section('content')
    
    <div class="card shadow">
        {{-- <div class="card-header">
            <h4 class="card-title">Produk Digital</h4>
        </div> --}}
        <div class="card-body">
            <div class="d-flex justify-content-end mb-4">

                <a href="#modal-form" class="modal-tambah" data-toggle="modal">
                    <button class="glow-on-hover" type="button"><i class="fa fa-plus mr-3"></i>Tambah Data</button>
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Testimoni</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
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
                <h5 class="modal-title text-white font-weight-bold bold ">Form Testimoni</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-kategori text-warning">
                            <div class="form-group">
                                <label for="">Nama Testimoni</label>
                                <input type="text" name="nama_testimoni" id="nama_testimoni" placeholder="Masukkan nama kategori produk..." class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" required name="deskripsi" placeholder="Masukkan deskripsi produk..." id="deskripsi"></textarea>
                            </div>
                            <label for="">Gambar</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label class="custom-file-label" for="gambar">Masukkan foto produk...</label>
                                </div>
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

        $.ajax({
            url: '/api/testimonis',
            success: function({data}) {
                let row;
                data.map(function(val, index){
                    row += `
                    <tr>
                        <td>${parseInt(index)+1}</td>
                        <td>${val.nama_testimoni}</td>
                        <td>${val.deskripsi}</td>
                        <td><img src="/uploads/${val.gambar}" width="300" class="rounded"</td>
                        <td>
                            <a data-toggle="modal" class="btn btn-warning modal-ubah"  href="#modal-form" data-id="${val.id}">Edit</a>
                            <a class="btn btn-outline-danger btn-hapus" href="#" data-id="${val.id}">Hapus</a>
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
                        url: 'api/testimonis/' + id,
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

        $('.modal-tambah').click(function(){
            $('modal-form').modal('show');

            $('input[name="nama_testimoni"]').val('');
            $('textarea[name="deskripsi"]').val('');

            $('.form-kategori').submit(function(e){
                e.preventDefault();

                const token = localStorage.getItem('token');
                const frmdata = new FormData(this);
    
                $.ajax({
                    url: 'api/testimonis',
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
                            alert('Data Berhasil Ditambahkan!');
                            location.reload();
                        }
                    }
                });
            });
        });

        $(document).on('click', '.modal-ubah', function(){
            $('modal-form').modal('show');

            const id = $(this).data('id');

            $.get('/api/testimonis/' + id, function({data}){
                $('input[name="nama_testimoni"]').val(data.nama_testimoni);
                $('textarea[name="deskripsi"]').val(data.deskripsi);
            });

            $('.form-kategori').submit(function(e){
                e.preventDefault();

                const token = localStorage.getItem('token');
                const frmdata = new FormData(this);

                $.ajax({
                    url: `api/testimonis/${id}?_method=PUT`,
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