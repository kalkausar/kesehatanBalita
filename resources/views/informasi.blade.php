@extends('template')
@section('content')
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Informasi</h1>
                <a href="{{url('/')}}">Home</a> <span>|</span> <a href="{{url('/informasi')}}">Informasi</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!-- News Area Starts -->
<section class="news-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>Informasi</h2>
                    <p>Temukan informasi medis mengenai kesehatan balita dari sumber terpercaya.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($news as $n)
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="news-img">
                        @if($n->path==null)
                        <img src="{{url('assets/images/news_default.jpg')}}" alt="" class="img-fluid">
                        @else
                        <img src="{{$n->path}}" alt="" class="img-fluid">
                        @endif
                    </div>
                    <div class="news-text">
                        <div class="news-date">
                            {{$n->created_at->format('d, M Y')}}
                        </div>
                        <h3><a href="{{url('informasiDetail')}}/{{$n->id}}/{{$n->slug}}">{{$n->title}}</a></h3>
                        <p>{!!str_limit($n->content)!!}</p>
                        <a href="{{url('informasiDetail')}}/{{$n->id}}/{{$n->slug}}" class="news-btn">read more <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- News Area Starts -->
@endsection
