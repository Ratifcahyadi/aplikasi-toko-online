@extends('layouts.app')
@section('title')
    Tentang
@endsection

@section('content')
        
<div class="card shadow">
    {{-- <div class="card-header">
        <h4 class="card-title">Produk Digital</h4>
    </div> --}}
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-tentang text-warning" action="/tentang/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul Website</label>
                        <input type="text" name="judul_website" id="judul_website" placeholder="Masukkan judul website produk..." class="form-control" required value="{{ $about->judul_website }}">
                    </div>
                    <label for="">Logo</label> <br>
                    <img src="/uploads/{{ $about->logo }}" alt="" width="200" class="mb-2">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="logo" name="logo">
                            <label class="custom-file-label" for="logo">Masukkan logo...</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea class="form-control" required name="deskripsi" placeholder="Masukkan deskripsi website..." id="deskripsi">{{ $about->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea class="form-control" required name="alamat" placeholder="Masukkan alamat website..." id="deskripsi">{{ $about->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" placeholder="Masukkan email website produk..." class="form-control" required value="{{ $about->email }}">
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" name="telepon" id="telepon" placeholder="Masukkan telepon website produk..." class="form-control" required value="{{ $about->telepon }}">
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-warning btn-block btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
    $('#logo').on('change', function(){
    console.log("upload gambar jalan gess!");
    files = $(this)[0].files; 
    name = ''; 
    for(var i = 0; i < files.length; i++)
    {
        name += '\"' + files[i].name + '\"' + (i != files.length-1 ? ", " : ""); 
    } 
    $(".custom-file-label").html(name);
    });
    </script>
@endpush