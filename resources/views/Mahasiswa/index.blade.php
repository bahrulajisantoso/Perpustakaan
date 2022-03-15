@extends('layout.main')
@section('title', 'Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar mahasiswa</h1>
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary btn-xs pull-right">Tambah Mahasiswa</a>
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
                            <form action="{{ url ('mahasiswa/'.$mhs->id) }}" method="POST" class="d-inline">
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