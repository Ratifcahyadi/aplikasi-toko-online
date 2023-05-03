@extends('layouts.app')

@section('title', 'Data Produk Barang')

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
                            <th>Kategori</th>
                            <th>Subkategori</th>
                            <th>Nama Barang</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Bahan</th>
                            <th>Tags</th>
                            <th>Sku</th>
                            <th>Ukuran</th>
                            <th>Warna</th>
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
                <h5 class="modal-title text-white font-weight-bold bold ">Form Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-kategori text-warning">
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select name="id_kategori" id="id_kategori" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Sub Kategori</label>
                                <select name="id_subkategori" id="id_subkategori" class="form-control">
                                    @foreach ($subcategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->nama_subkategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <input type="text" name="nama_barang" id="nama_barang" placeholder="Masukkan nama produk..." class="form-control" required>
                            </div>
                            <label for="">Gambar</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label class="custom-file-label" for="gambar">Masukkan foto produk...</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" required name="deskripsi" placeholder="Masukkan deskripsi produk..." id="deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="number" name="harga" id="harga" placeholder="Masukkan harga produk..." class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Diskon</label>
                                <input type="number" name="diskon" id="diskon" placeholder="Masukkan diskon produk..." class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Bahan</label>
                                <input type="text" name="bahan" id="bahan" placeholder="Masukkan tags produk..." class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Stock Keeping Unit (SKU)</label>
                                <input type="text" name="sku" id="sku" placeholder="Masukkan sku produk..." class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tags Produk</label>
                                <input type="text" name="tags" id="tags" placeholder="Masukkan tags produk..." class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Ukuran</label>
                                <input type="text" name="ukuran" id="ukuran" placeholder="Masukkan ukuran produk..." class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Warna</label>
                                <input type="text" name="warna" id="warna" placeholder="Masukkan warna produk..." class="form-control" required>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-warning btn-block">Submit</button>
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
            url: '/api/products',
            success: function({data}) {
                let row;
                data.map(function(val, index){
                    row += `
                    <tr>
                        <td>${parseInt(index)+1}</td>
                        <td>${val.category.nama_kategori}</td>
                        <td>${val.subcategory.nama_subkategori}</td>
                        <td>${val.nama_barang}</td>
                        <td><img src="/uploads/${val.gambar}" width="300" class="rounded"</td>
                        <td>${val.deskripsi}</td>
                        <td>${val.harga}</td>
                        <td>${val.diskon}</td>
                        <td>${val.bahan}</td>
                        <td>${val.tags}</td>
                        <td>${val.sku}</td>
                        <td>${val.ukuran}</td>
                        <td>${val.warna}</td>
                        <td class="d-flex flex-column align-content-lg-between">
                            <a data-toggle="modal" class="btn btn-warning modal-ubah mb-1"  href="#modal-form" data-id="${val.id}">Edit</a>
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
                        url: 'api/products/' + id,
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

            $('input[name="nama_kategori"]').val('');
            $('textarea[name="deskripsi"]').val('');

            $('.form-kategori').submit(function(e){
                e.preventDefault();

                const token = localStorage.getItem('token');
                const frmdata = new FormData(this);
    
                $.ajax({
                    url: 'api/products',
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

            $.get('/api/products/' + id, function({data}){
                $('input[name="nama_barang"]').val(data.nama_barang);
                $('textarea[name="deskripsi"]').val(data.deskripsi);
                $('input[name="harga"]').val(data.harga);
                $('input[name="diskon"]').val(data.diskon);
                $('input[name="bahan"]').val(data.bahan);
                $('input[name="tags"]').val(data.tags);
                $('input[name="sku"]').val(data.sku);
                $('input[name="ukuran"]').val(data.ukuran);
                $('input[name="warna"]').val(data.warna);
            });

            $('.form-kategori').submit(function(e){
                e.preventDefault();

                const token = localStorage.getItem('token');
                const frmdata = new FormData(this);

                $.ajax({
                    url: `api/products/${id}?_method=PUT`,
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