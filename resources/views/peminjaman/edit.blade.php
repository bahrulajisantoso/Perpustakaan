@extends('layout.main')
@section('title', 'Edit Peminjaman')
@section('container')
<div class="container">
    <div class="row ">
        <div class="col-10">
            <h2 class="mt-3">Edit Data Peminjaman</h2>
            <form method="POST" action="{{ url ('peminjaman/'.$peminjaman->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="card" style="width: 30rem;">
                <div class="card-body">
                 <div class="form-group">
                <select name="status">
                  <option value="{{ $peminjaman->status }}">{{ $peminjaman->status }}</option>
                  <option value="Sudah Kembali">Sudah Kembali</option>
                  <option value="Belum Kembali">Belum Kembali</option>
                 
                </select>
                 </div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
              </form>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection