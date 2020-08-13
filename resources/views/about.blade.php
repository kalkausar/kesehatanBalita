@extends('template')
@section('content')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Tentang Kami</h1>
                    <a href="{{url('/')}}">Home</a> <span>|</span> <a href="{{url('tentangKami')}}">Tentang Kami</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="welcome-img">
                        <img src="{{url('assets/images/tentang.jpg')}}" alt="img-alt">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="welcome-text mt-5 mt-lg-0">
                        <h2>PNEUMONIA</h2>
                        <p class="pt-3">Pneumonia adalah peradangan paru-paru yang disebabkan oleh infeksi. Pneumonia merupakan penyebab dari 16% kematian balita ditahun 2015. Website ini menampilkan informasi tentang penyakit pneumonia dan penyebaran penyakit di Porvinsi Jawa Barat berdasarkan kabupaten/kota dengan melihat jumlah balita, jumlah perkiraan penderita dan penderita ditemukan dan ditangani.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->
@endsection
