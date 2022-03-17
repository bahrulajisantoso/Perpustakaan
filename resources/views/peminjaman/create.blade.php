@extends('layout.main')
@section('title', 'Peminjaman')
@section('container')
<div class="container">
    <div class="row ">
        <div class="col-10">
            <h2 class="mt-3">Peminjaman</h2>
            <form method="POST" action="{{ url ('peminjaman') }}">
                @csrf
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_peminjam">Nama</label>
                            <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="judul_buku">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control" id="judul_buku" placeholder="Masukkan Nama" required>
                        </div>

                        <div class="form-group">
                            <label for="nama_pegawai">Pegawai</label>
                            <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" placeholder="Masukkan No HP" required>
                        </div>

                        <div class="form-group">
                            <label for="tgl_pinjam">Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" class="form-control" id="tgl_pinjam" placeholder="Masukkan Email" required>
                        </div>

                        <div class="form-group">
                            <label for="tgl_kembali">Tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" class="form-control" id="tgl_kembali" placeholder="Masukkan Email" required>
                        </div>

                        <button type="submit" class="btn btn-primary ">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection