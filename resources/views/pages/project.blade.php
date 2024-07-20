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

<section class="sec-img bg">
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
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Vietnam Homes</a></li>
                    <li class="breadcrumb-item"><a href="{{$post->category->slug}}/{{$post->slug}}">{{$post->name}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$post->name}}</li>
                </ol>
                <div class="sub">
                    <span class="bg-secondary">Độc quyền <i class="ms-1 icon-check"></i></span>
                    <span class="bg-secondary">Đang mở bán <i class="ms-1 icon-check"></i></span>
                    <span class="bg-secondary">Mới ra mắt <i class="ms-1 icon-check"></i></span>
                </div>
            </nav>
            <div class="heading">
                <div class="left">
                    <h1 class="text-uppercase title-cat">{{$post->name}}</h1>
                    <div class="address"><i class="icon-location me-1"></i> {{$post->address}}, {{$post->ward->name}}, {{$post->District->name}}, {{$post->Province->name}} <a href="">Xem trên bản đồ</a></div>
                </div>
                <div class="right">
                    <div class="price"> {{$post->price}} {{$post->price_max ? ' - '.$post->price_max:''}} {{$post->unit}}</div>
                    <div class="price_acreage">{{number_format($post->price*1000000000/$post->acreage/1000000, 2)}} triệu/m<sup>2</sup></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="detail bg">
                {!! $post->content !!}
            </div>
            @foreach($sections as $key => $section)
            @if($section->status == 1)
            <div class="main-content">
                <div class="content-text">
                    <h2>{{$section->heading}}</h2>
                    {!! $section->content !!}
                </div>
                <div class="content-img">
                    <div class="swiper mySwiper-section-1">
                        <div class="swiper-wrapper">
                            @foreach($section->Images as $img)
                            <div class="swiper-slide"><img src="data/product/detail/{{$img->img}}"></div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            @elseif($section->status == 2)
            <div class="main-content">
                <div class="content-text">
                    <h2>{{$section->heading}}</h2>
                    {!! $section->content !!}
                </div>
                <div class="content-img">
                    <div class="swiper mySwiper-section-2">
                        <div class="swiper-wrapper">
                            @foreach($section->Images as $img)
                            <div class="swiper-slide"><img src="data/product/detail/{{$img->img}}"></div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            @elseif($section->status == 3) <!-- Mặt bằng -->
            <div class="main-content">
                <h2>{{$section->heading}}</h2>
                {!! $section->content !!}
                <div class="matbang">
                    <div class="tab swiper menu-tab">
                        <div class="swiper-wrapper">
                            <button class="swiper-slide tablinks active" onclick="openTab(event, 'Tab1')"> <span>MB Tòa A</span> </button>
                            <button class="swiper-slide tablinks" onclick="openTab(event, 'Tab2')"><span>MB Tòa A</span></button>
                            <button class="swiper-slide tablinks" onclick="openTab(event, 'Tab3')"><span>MB Tòa A</span></button>
                            <button class="swiper-slide tablinks" onclick="openTab(event, 'Tab3')"><span>MB Tòa A</span></button>
                            <button class="swiper-slide tablinks" onclick="openTab(event, 'Tab3')"><span>MB Tòa A</span></button>
                            <button class="swiper-slide tablinks" onclick="openTab(event, 'Tab3')"><span>MB Tòa A</span></button>
                            <button class="swiper-slide tablinks" onclick="openTab(event, 'Tab3')"><span>MB Tòa A</span></button>
                        </div>
                    </div>

                    <div id="Tab1" class="tabcontent active" style="display: block;">
                        <img src="http://localhost/www/vietnamhomes/public/uploads/1721361828.jpg">
                    </div>

                    <div id="Tab2" class="tabcontent">
                        <img src="http://localhost/www/vietnamhomes/public/uploads/1721361828.jpg">
                    </div>

                    <div id="Tab3" class="tabcontent">
                        <img src="http://localhost/www/vietnamhomes/public/uploads/1721361828.jpg">
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            
        </div>
        <div class="col-md-3">
            <div class="fixtop">
                <div class="right-sidebar">
                    <div class="top">
                        <div class="avatar">
                            <img src="assets/images/avata-tgd.png">
                        </div>
                        <div class="right">
                            <h5>Liên hệ tư vấn</h5>
                            <p>Chuyên viên tư vấn đã sãn sàng hỗ trợ</p>
                        </div>
                    </div>
                    <div class="hotline"> <a href="tel:{{$setting->hotline}}"><i class="icon-phone"></i> {{$setting->hotline}}</a> </div>
                </div>
                <div class="pupup">
                    <button> <img src="assets/images/icon-document-register.svg"> Đăng ký nhận tài liệu dự án</button>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- @foreach($sections as $key => $section)
@if($section->status == 0)
<div class="main-content container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-text">
                <h2>{{$section->heading}}</h2>
                {!! $section->content !!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="content-img">
                @if(count($section->Images)>1)
                <div class="swiper mySwiper-section-2">
                    <div class="swiper-wrapper">
                        @foreach($section->Images as $img)
                        <div class="swiper-slide"><img src="data/product/detail/{{$img->img}}"></div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                @else
                <div class="img">
                    <img src="data/product/detail/{{$img->img}}">
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@elseif($section->status == 1)
<div class="main-content section-chan">
    <div class="row">
        <div class="col-md-6 col-left">
            <div class="content-text">
                <h2>{{$section->heading}}</h2>
                {!! $section->content !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="content-img">
                <div class="swiper mySwiper-section-1">
                    <div class="swiper-wrapper">
                        @foreach($section->Images as $img)
                        <div class="swiper-slide"><img src="data/product/detail/{{$img->img}}"></div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($section->status == 2)
<div class="main-content section-le">
    <div class="row">
        <div class="col-md-6 col-left">
            <div class="content-text">
                <h2>{{$section->heading}}</h2>
                {!! $section->content !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="content-img">
                <div class="swiper mySwiper-section-1">
                    <div class="swiper-wrapper">
                        @foreach($section->Images as $img)
                        <div class="swiper-slide"><img src="data/product/detail/{{$img->img}}"></div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($section->status == 3)
2
@endif
@endforeach -->

@endsection

@section('js')
<script src="assets/js/project.js"></script>
@endsection