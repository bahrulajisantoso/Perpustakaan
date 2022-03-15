@extends('layout.main')
@section('title', 'Tambah Mahasiswa')
@section('container')
<div class="container">
    <div class="row ">
        <div class="col-10">
            <h2 class="mt-3">Tambah Mahasiswa</h2>
            <form method="POST" action="{{ url ('mahasiswa') }}">
                @csrf
                <div class="card" style="width: 30rem;">
                <div class="card-body">
                <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" name ="nim" class="form-control" id="nim"  placeholder="Masukan NIM" required>
                </div>
                
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name ="nama" class="form-control" id="nama"  placeholder="Masukan Nama" required>
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name ="jurusan" class="form-control" id="jurusan"  placeholder="Masukan Jurusan" required>
                   
                </div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
              </form>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection