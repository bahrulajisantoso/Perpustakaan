@extends('layout.main')
@section('title', 'Pegawai')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Data Pegawai</h1>
            <a href="{{ route('pegawai.create') }}" class="btn btn-primary btn-xs pull-right">Tambah Pegawai</a>
            <table class="table table-striped border border-primary">
                <thead class="text-light bg-primary">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $pegawai as $pgw)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pgw->nama_pegawai}}</td>
                        <td>{{ $pgw->no_hp}}</td>
                        <td>{{ $pgw->email}}</td>
                        <td>
                            <a href="{{ url ('pegawai/'.$pgw->id.'/edit') }}" class="badge badge-success">edit</a>
                            <form action="{{ url ('pegawai/'.$pgw->id) }}" method="POST" class="d-inline">
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