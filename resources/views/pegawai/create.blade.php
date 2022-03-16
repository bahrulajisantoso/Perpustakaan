@extends('layout.main')
@section('title', 'Tambah Pegawai')
@section('container')
<div class="container">
    <div class="row ">
        <div class="col-10">
            <h2 class="mt-3">Tambah Pegawai</h2>
            <form method="POST" action="{{ url ('pegawai') }}">
                @csrf
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_pegawai">Nama</label>
                            <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" placeholder="Masukkan Nama" required>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Masukkan No HP" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                        </div>

                        <button type="submit" class="btn btn-primary ">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection