@extends('layout.main')
@section('title', 'Tambah Buku')
@section('container')
<div class="container">
    <div class="row ">
        <div class="col-10">
            <h2 class="mt-3">Tambah Buku</h2>
            <form method="POST" action="{{ url ('buku') }}">
                @csrf
                <div class="card" style="width: 30rem;">
                <div class="card-body">
                <div class="form-group">
                  <label for="judul">Judul Buku</label>
                  <input type="text" name ="judul_buku" class="form-control" id="judul"  placeholder="Masukan judul buku" required>
                </div>
                
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" name ="penulis" class="form-control" id="penulis"  placeholder="Masukan penulis" required>
                   
                </div>

                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" name ="penerbit" class="form-control" id="penerbit"  placeholder="Masukan penerbit" required>
                   
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun Terbit</label>
                    <input type="text" name ="tahun_terbit" class="form-control" id="tahun"  placeholder="Masukan tahun terbit" required>
                   
                  </div>
                  <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" name ="stok" class="form-control" id="stok"  placeholder="Masukan stok buku" required>
                   
                  </div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
              </form>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection