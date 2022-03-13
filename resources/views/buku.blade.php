@extends('layout.main')
@section('title', 'Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Data Buku</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <!-- <th scope="col">Email</th> -->
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $buku as $bs)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $bs->judul_buku}}</td>
                        <td>{{ $bs->penulis}}</td>
                        <td>{{ $bs->penerbit}}</td>
                        <td>{{ $bs->tahun_terbit}}</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection