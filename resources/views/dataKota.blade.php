@extends('template')
@section('content')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Data Kabupaten / Kota</h1>
                    <a href="{{url('/')}}">Home</a> <span>|</span> <a href="{{url('/dataKota')}}">Data Kabupaten / Kota</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    @yield('kota')
@endsection
