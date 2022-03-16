@extends('layout.main')
@section('title', 'Edit Pegawai')
@section('container')
<div class="container">
    <div class="row ">
        <div class="col-10">
            <h2 class="mt-3">Edit Data Pegawai</h2>
            <form method="POST" action="{{ url ('pegawai/'.$pegawai->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="card" style="width: 30rem;">
                <div class="card-body">
                <div class="form-group">
                  <label for="nama_pegawai">Nama</label>
                  <input type="text" name ="nama_pegawai" class="form-control" id="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" required>
                </div>
                
                <div class="form-group">
                    <label for="no_hp">N0 HP</label>
                    <input type="text" name ="no_hp" class="form-control" id="no_hp"  value="{{ $pegawai->no_hp }}" required>
                   
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name ="email" class="form-control" id="email"   value="{{ $pegawai->email }}" required>
                   
                </div>

                <button type="submit" class="btn btn-primary ">Simpan</button>
              </form>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection