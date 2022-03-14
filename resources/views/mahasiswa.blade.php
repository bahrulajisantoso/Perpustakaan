@extends('layout.main')
@section('title', 'Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar mahasiswa</h1>
            <table class="table table-striped border border-primary">
                <thead class="text-light bg-primary">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <!-- <th scope="col">Email</th> -->
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mhs->nim}}</td>
                        <td>{{ $mhs->nama}}</td>
                        <td>{{ $mhs->jurusan}}</td>
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