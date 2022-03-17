@extends('layout/main')

@section('title', 'tentang kami')

@section('container')
<div class="card bg-dark text-white">
    <img src="{{URL::asset('/img/polije3.jpg')}}" class="card-img" alt="...">
    <div class="card-img-overlay">
        <h5 class="card-title">TENTANG KAMI</h5>
        <p class="card-text">PERPUSTAKAAN POLITEKNIK NEGERI JEMBER Berbasis WEB merupakan sarana untuk memelihara dan meningkatkan efisiensi dan efektifitas proses belajar-mengajar.
            Perpustakaan yang terorganisir secara baik dan sisitematis, secara langsung atau pun tidak langsung dapat memberikan kemudahan bagi proses belajar mengajar di sekolah tempat perpustakaan tersebut berada.
            Hal ini, trekait dengan kemajuan bidang pendidikan dan dengan adanya perbaikan metode belajar-mengajar yang dirasakan tidak bisa dipisahkan dari masalah penyediaan fasilitas dan sarana pendidikan.</p>
    </div>
</div>

@endsection