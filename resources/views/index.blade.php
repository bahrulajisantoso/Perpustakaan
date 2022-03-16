@extends('layout/main')

@section('title', 'Home')

@section('container')
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <img src="{{URL::asset('/img/polije2.png')}}" class="card-img-top" alt="...">
                <h5 class="card-title">SELAMAT DATANG DI WEBSITE PERPUSTAKAAN POLITEKNIK NEGERI JEMBER</h5>
                <p class="card-text">Politeknik Negeri Jember merupakan perguruan tinggi yang menyelenggarakan pendidikan vokasional, yaitu program pendidikan yang mengarah proses belajar mengajar pada tingkat keahlian, keterampilan.</p>
                <a href="https://polije.ac.id/" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <img src="{{URL::asset('/img/culture.png')}}" class="card-img-top" alt="...">
                <h5 class="card-title">DIGITAL CULTURE</h5>
                <p class="card-text">Digital culture yaitu kemampuan individu dalam membaca, menguraikan, membiasakan, memeriksa dan membangun wawasan kebangsaan, nilai Pancasila dan Bhinneka Tunggal Ika dalam kehidupan sehari-hari.</p>
                <a href="https://www.youtube.com/watch?v=ke5FUxXURrw" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

@endsection