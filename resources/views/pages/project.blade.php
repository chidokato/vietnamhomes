@extends('layout.index')

@section('title') {{$post->title ? $post->title : $post->name}} @endsection
@section('description') {{$post->description ? $post->description : $post->name.$post->name}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href="assets/css/project.css" rel="stylesheet">
@endsection

@section('content')

<section class="sec-img">
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="data/product/{{$post->img}}" />
            </div>
            @foreach($post->Images as $img)
            <div class="swiper-slide">
                <img src="data/product/detail/{{$img->img}}" />
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="data/product/{{$post->img}}" />
            </div>
            @foreach($post->Images as $img)
            <div class="swiper-slide">
                <img src="data/product/detail/{{$img->img}}" />
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Vietnam Homes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dự án</li>
                </ol>
            </nav>
            <h1 class="text-uppercase title-cat">Các dự án bất động sản trên toàn quốc</h1>
            <div class="location">
                
            </div>
            <div class="main-content">
                @foreach($sections as $section)
                <h2>{{$section->heading}}</h2>
                {!! $section->content !!}
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            <div class="price">
                <div>1.2 - 3 tỷ</div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="assets/js/project.js"></script>

@endsection