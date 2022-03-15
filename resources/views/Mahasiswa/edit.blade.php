@extends('layout.main')
@section('title', 'Edit Mahasiswa')
@section('container')
<div class="container">
    <div class="row ">
        <div class="col-10">
            <h2 class="mt-3">Edit Data Mahasiswa</h2>
            <form method="POST" action="{{ url ('mahasiswa/'.$mhs->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="card" style="width: 30rem;">
                <div class="card-body">
                <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" name ="nim" class="form-control" id="nim" value="{{ $mhs->nim }}" required>
                </div>
                
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name ="nama" class="form-control" id="nama"  value="{{ $mhs->nama }}" required>
                   
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name ="jurusan" class="form-control" id="jurusan"   value="{{ $mhs->jurusan }}" required>
                   
                </div>

                <button type="submit" class="btn btn-primary ">Simpan</button>
              </form>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection