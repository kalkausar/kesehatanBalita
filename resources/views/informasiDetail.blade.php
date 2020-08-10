@extends('template')
@section('content')
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>{{$news->title}}</h1>
                <a href="{{url('/')}}">Home</a> <span>|</span> <a href="{{url('informasiDetail')}}/{{$news->id}}/{{$news->slug}}">{{$news->title}}</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                          @if($news->path==null)
                          <img src="{{url('assets/images/news_defaultDetail.jpg')}}" alt="blog-img" class="img-fluid">
                          @else
                          <img src="{{$news->path}}" alt="blog-img" class="img-fluid">
                          @endif
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            <ul class="blog_meta list">
                                <li><a href="#">{{$news->author}}<i class="fa fa-user-o"></i></a></li>
                                <li><a href="#">{{$news->created_at->format('d, M Y')}}<i class="fa fa-calendar-o"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 blog_details">
                      <h3>{{$news->title}}</h3>
                        <p class="excert">
                            {!!$news->content!!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h4 class="widget_title">informasi</h4>
                        @foreach($allnews as $a)
                        <div class="media post_item">
                          @if($a->path==null)
                          <img src="{{url('assets/images/news_defaultDetail1.jpg')}}" alt="post">
                          @else
                          <img src="{{$a->path}}" alt="post" width="100px">
                          @endif
                            <div class="media-body">
                                <a href="{{url('informasiDetail')}}/{{$a->id}}/{{$a->slug}}">
                                    <h5>{{$a->title}}</h5>
                                </a>
                                <p>{{$a->created_at->format('d, M Y')}}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="br"></div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
@endsection
