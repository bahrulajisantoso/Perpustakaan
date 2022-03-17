@extends('layout.main')
@section('title', 'Peminjaman')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Data Peminjaman</h1>
            <a href="{{ route('peminjaman.create') }}" class="btn btn-primary btn-xs pull-right">Tambah buku</a>
            <table class="table table-striped border border-primary">
                <thead class="text-light bg-primary">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nama_pegawai</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $peminjaman as $pmj)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pmj->nama_pegawai}}</td>
                        <td>{{ $pmj->judul_buku}}</td>
                        <td>{{ $pmj->nama_pegawai}}</td>
                        <td>{{ $pmj->tgl_pinjam}}</td>
                        <td>{{ $pmj->tgl_kembali}}</td>
                        <td>
                            <a href="{{ url ('peminjaman/'.$pmj->id.'/edit') }}" class="badge badge-success">edit</a>
                            <form action="{{ url ('pegawai/'.$pmj->id) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="badge badge-danger border-0" onclick="return confirm ('Yakin untuk mengahapus ?')">
                                    delete<span data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection