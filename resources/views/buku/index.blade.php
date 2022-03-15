@extends('layout.main')
@section('title', 'Data Buku')
@section('container')
<div class="container">
    <div class="row ">
        <div class="col-10">
            <h1 class="mt-3">Data Buku</h1>
            <a href="{{ route('buku.create') }}" class="btn btn-primary btn-xs pull-right">Tambah buku</a>
            <table class="table table-striped border border-primary" >
                <thead class="thead text-light bg-primary ">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <!-- <th scope="col">Email</th> -->
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Stok</th>

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
                        <td>{{ $bs->stok}}</td>
                        <td>
                            <a href="{{ url ('buku/'.$bs->id.'/edit') }}" class="badge badge-success">edit</a>
                            
                            <form action="{{ url ('buku/'.$bs->id) }}" method="POST" class="d-inline">
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