@extends('layout.index')

@section('title') {{$setting->title ? $setting->title : $setting->name}} @endsection
@section('description') {{$setting->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')

@endsection

@section('content')

<!------------------- HERO ------------------->
<section class="sec-hero">
    <div class="hero-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><span style='background-image: url("assets/images/capital.jpg")' class="w-100 thumb"></span></div>
            </div>
            <div class="swiper-navigator">
                <div class="swiper-pagination"></div>
                <div class="swiper-navigator-btn">
                    <div class="swiper-button-prev"><i class="icon-prev-thin"></i></div>
                    <div class="swiper-button-next"><i class="icon-next-thin"></i></div>
                </div>
            </div>
        </div>
    </div>
    
</section>


<!------------------- PRODUCT RENT ------------------->
<section class="sec-product-rent">
    <div class="container">
        <div class="cover-title-home">
            <div class="text-start">
                <div class="cover-title">
                    <h3><span class="cover-title-filled text-main">DỰ ÁN TRỌNG ĐIỂM</span></h3>
                </div>
                <div class="cover-descip">
                    <p>Những dự án mang dấu ấn VIETNAM HOMES, được phát triển kinh doanh và phân phối độc quyền bỏi VIETNAM HOMES</p>
                </div>
            </div>
        </div>

        <div class="position-relative broker-slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="card card-s card-s4">
                                <a href="sale-detail.htm">
                                    <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://datxanhindochine.com/data/product/z4594510880569_6a6ee8e09b3544f753bc998a7fa81f67.jpg');" alt="..."></span>
                                    <span class="view-more">Chi tiết</span>
                                    <div class="product-status">
                                        <span><i class="icon-acreage me-1"></i>50 - 100m2</span>
                                        <span><i class="icon-bed me-1"></i>2 - 3PN</span>
                                        <span><i class="icon-bathroom me-1"></i>2 - 3WC</span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="card-body-wrap">
                                        <h5 class="card-title"><a href="#" class="text-truncate">Capital Elite</a></h5>
                                        <div class="card-info">
                                            <span>18 Phạm Hùng, Nam Từ Liêm, Hà Nội</span>
                                        </div>
                                    </div>
                                    <div class="card-price">Giá từ: <span class="current-price">7 - 9 tỷ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="card card-s card-s4">
                                <a href="sale-detail.htm">
                                    <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://datxanhindochine.com/data/product/Essensia-Nam-Sai-Gon-1024x576.jpg');" alt="..."></span>
                                    <span class="view-more">Chi tiết</span>
                                    <div class="product-status">
                                        <span><i class="icon-acreage me-1"></i>50 - 100m2</span>
                                        <span><i class="icon-bed me-1"></i>2 - 3PN</span>
                                        <span><i class="icon-bathroom me-1"></i>2 - 3WC</span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="card-body-wrap">
                                        <h5 class="card-title"><a href="#" class="text-truncate">Essensia Nam Sài Gòn</a></h5>
                                        <div class="card-info">
                                            <span>18 Phạm Hùng, Nam Từ Liêm, Hà Nội</span>
                                        </div>
                                    </div>
                                    <div class="card-price">Giá từ: <span class="current-price">7 - 9 tỷ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="card card-s card-s4">
                                <a href="sale-detail.htm">
                                    <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://datxanhindochine.com/data/product/phoi-canh-masteri-west-heights-1536x987.jpg');" alt="..."></span>
                                    <span class="view-more">Chi tiết</span>
                                    <div class="product-status">
                                        <span><i class="icon-acreage me-1"></i>50 - 100m2</span>
                                        <span><i class="icon-bed me-1"></i>2 - 3PN</span>
                                        <span><i class="icon-bathroom me-1"></i>2 - 3WC</span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="card-body-wrap">
                                        <h5 class="card-title"><a href="#" class="text-truncate">Masteri West Heights</a></h5>
                                        <div class="card-info">
                                            <span>18 Phạm Hùng, Nam Từ Liêm, Hà Nội</span>
                                        </div>
                                    </div>
                                    <div class="card-price">Giá từ: <span class="current-price">7 - 9 tỷ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="card card-s card-s4">
                                <a href="sale-detail.htm">
                                    <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://datxanhindochine.com/data/product/0027-1024x512.jpg');" alt="..."></span>
                                    <span class="view-more">Chi tiết</span>
                                    <div class="product-status">
                                        <span><i class="icon-acreage me-1"></i>50 - 100m2</span>
                                        <span><i class="icon-bed me-1"></i>2 - 3PN</span>
                                        <span><i class="icon-bathroom me-1"></i>2 - 3WC</span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="card-body-wrap">
                                        <h5 class="card-title"><a href="#" class="text-truncate">THE MATRIX ONE</a></h5>
                                        <div class="card-info">
                                            <span>18 Phạm Hùng, Nam Từ Liêm, Hà Nội</span>
                                        </div>
                                    </div>
                                    <div class="card-price">Giá: <span class="current-price">Liên hệ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="card card-s card-s4">
                                <a href="sale-detail.htm">
                                    <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://datxanhindochine.com/data/product/0027-1024x512.jpg');" alt="..."></span>
                                    <span class="view-more">Chi tiết</span>
                                    <div class="product-status">
                                        <span><i class="icon-acreage me-1"></i>50 - 100m2</span>
                                        <span><i class="icon-bed me-1"></i>2 - 3PN</span>
                                        <span><i class="icon-bathroom me-1"></i>2 - 3WC</span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="card-body-wrap">
                                        <h5 class="card-title"><a href="#" class="text-truncate">THE MATRIX ONE</a></h5>
                                        <div class="card-info">
                                            <span>18 Phạm Hùng, Nam Từ Liêm, Hà Nội</span>
                                        </div>
                                    </div>
                                    <div class="card-price">Giá: <span class="current-price">Liên hệ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="card card-s card-s4">
                                <a href="sale-detail.htm">
                                    <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://datxanhindochine.com/data/product/0027-1024x512.jpg');" alt="..."></span>
                                    <span class="view-more">Chi tiết</span>
                                    <div class="product-status">
                                        <span><i class="icon-acreage me-1"></i>50 - 100m2</span>
                                        <span><i class="icon-bed me-1"></i>2 - 3PN</span>
                                        <span><i class="icon-bathroom me-1"></i>2 - 3WC</span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="card-body-wrap">
                                        <h5 class="card-title"><a href="#" class="text-truncate">THE MATRIX ONE</a></h5>
                                        <div class="card-info">
                                            <span>18 Phạm Hùng, Nam Từ Liêm, Hà Nội</span>
                                        </div>
                                    </div>
                                    <div class="card-price">Giá: <span class="current-price">Liên hệ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="card card-s card-s4">
                                <a href="sale-detail.htm">
                                    <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://datxanhindochine.com/data/product/0027-1024x512.jpg');" alt="..."></span>
                                    <span class="view-more">Chi tiết</span>
                                    <div class="product-status">
                                        <span><i class="icon-acreage me-1"></i>50 - 100m2</span>
                                        <span><i class="icon-bed me-1"></i>2 - 3PN</span>
                                        <span><i class="icon-bathroom me-1"></i>2 - 3WC</span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="card-body-wrap">
                                        <h5 class="card-title"><a href="#" class="text-truncate">THE MATRIX ONE</a></h5>
                                        <div class="card-info">
                                            <span>18 Phạm Hùng, Nam Từ Liêm, Hà Nội</span>
                                        </div>
                                    </div>
                                    <div class="card-price">Giá: <span class="current-price">Liên hệ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination "></div>
            </div>
            <div class="swiper-button-next d-none d-lg-flex d-lg-none"></div>
            <div class="swiper-button-prev d-none d-lg-flex d-lg-none"></div>
        </div>

        <div class="load-more text-center mt-4 pt-2">
            <div class="cta-btn ir">
                <a class="" href="#"><span class="cta-text font-weight-semibold">Xem tất cả</span><span class="cta-ico"><i class="icon-next"></i></span></a>
            </div>
        </div>
    </div>
</section>

<!------------------- SERVICE ------------------->
<section class="sec-productcity-hp bg1">
    <div class="container position-relative">
        <div class="cover-title-home">
            <div class="text-start">
                <div class="cover-title">
                    <h3><span class="cover-title-filled text-main">DỰ ÁN TOÀN QUỐC</span></h3>
                </div>
            </div>
        </div>
        <div class="news-hightlight">
            <div class="row g-3">
                <div class="col-lg-3">
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" href="#">
                            <span class="card-overlay-img"><img src="assets/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('http://motorbiketoursinvietnam.com/wp-content/uploads/2014/11/Danang-City.jpg');"></span>
                            <div class="card-overlay-body">
                                <h2><span>Quảng</span><span>Ninh</span></h2>
                                <div>100 sản phẩm</div>
                            </div>
                        </a>
                    </div>
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" href="#">
                            <span class="card-overlay-img"><img src="assets/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('http://motorbiketoursinvietnam.com/wp-content/uploads/2014/11/Danang-City.jpg');"></span>
                            <div class="card-overlay-body">
                                <h2><span>Quảng</span><span>Ninh</span></h2>
                                <div>100 sản phẩm</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" href="#">
                            <span class="card-overlay-img"><img src="assets/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('http://motorbiketoursinvietnam.com/wp-content/uploads/2014/11/Danang-City.jpg');"></span>
                            <div class="card-overlay-body">
                                <h2><span>Quảng</span><span>Ninh</span></h2>
                                <div>100 sản phẩm</div>
                            </div>
                        </a>
                    </div>
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" href="#">
                            <span class="card-overlay-img"><img src="assets/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('http://motorbiketoursinvietnam.com/wp-content/uploads/2014/11/Danang-City.jpg');"></span>
                            <div class="card-overlay-body">
                                <h2><span>Quảng</span><span>Ninh</span></h2>
                                <div>100 sản phẩm</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" href="#">
                            <span class="card-overlay-img"><img src="assets/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('http://motorbiketoursinvietnam.com/wp-content/uploads/2014/11/Danang-City.jpg');"></span>
                            <div class="card-overlay-body">
                                <h2><span>Quảng</span><span>Ninh</span></h2>
                                <div>100 sản phẩm</div>
                            </div>
                        </a>
                    </div>
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" href="#">
                            <span class="card-overlay-img"><img src="assets/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('http://motorbiketoursinvietnam.com/wp-content/uploads/2014/11/Danang-City.jpg');"></span>
                            <div class="card-overlay-body">
                                <h2><span>Quảng</span><span>Ninh</span></h2>
                                <div>100 sản phẩm</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" href="#">
                            <span class="card-overlay-img"><img src="assets/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('http://motorbiketoursinvietnam.com/wp-content/uploads/2014/11/Danang-City.jpg');"></span>
                            <div class="card-overlay-body">
                                <h2><span>Quảng</span><span>Ninh</span></h2>
                                <div>100 sản phẩm</div>
                            </div>
                        </a>
                    </div>
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" href="#">
                            <span class="card-overlay-img"><img src="assets/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('http://motorbiketoursinvietnam.com/wp-content/uploads/2014/11/Danang-City.jpg');"></span>
                            <div class="card-overlay-body">
                                <h2><span>Quảng</span><span>Ninh</span></h2>
                                <div>100 sản phẩm</div>
                            </div>
                        </a>
                    </div>
                </div>

                
            </div>
        </div>
        <div class="load-more text-center mt-4 pt-2">
            <div class="cta-btn ir">
                <a class="" href="#"><span class="cta-text font-weight-semibold">Xem tất cả</span><span class="cta-ico"><i class="icon-next"></i></span></a>
            </div>
        </div>
    </div>
</section>
<!------------------- END SERVICE ------------------->

<section class="sec-productcity-hp tintuc">
    <div class="container position-relative">
        <div class="cover-title-home">
            <div class="text-start">
                <div class="cover-title">
                    <h3><span class="cover-title-filled text-main">TIN TỨC</span></h3>
                </div>
                <div class="cover-descip">
                    <p>Cập nhật những thông tin mới nhất từ VIETNAM HOMES và thị trường bất động sản</p>
                </div>
            </div>
        </div>
        <div class="news-hightlight">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" href="#">
                            <span class="card-overlay-img"><img src="assets/images/space-3.gif" alt="" class="w-100 thumb" style="background-image: url('https://datxanhindochine.com/data/news/dt_15120241439_screenshot-(65).jpg');"></span>
                            <div class="card-overlay-body">
                                <h3>30.000 chuyên gia cao cấp khu Tây Hà Nội có nơi nghỉ dưỡng xứng đáng dành cho mình?</h3>
                                <div class="description text-truncate-set text-truncate-set-2">Bước sang năm 2024, quần thể đô thị nghỉ dưỡng Casa Del Rio quy mô 142 ha bất ngờ tung 30 căn biệt thự phiên bản giới hạn thuộc phân khu Roma, thu hút sự quan tâm của đông đảo khách hàng, đặc biệt là giới chuyên gia làm</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a href="#" class="news-item">
                        <span><img src="assets/images/space-1.gif" style="background-image: url('https://datxanhindochine.com/data/news/1vh-anh-1.jpg')" alt="" class="w-100 thumb"></span>
                        <div class="news-item-body">
                            <p class="mb-0 text-truncate-set text-truncate-set-3">Review phường Hoàng Liệt Bản đồ , vị trí , dịch vụ tiện ích và các thông tin </p>
                        </div>
                    </a>
                    <a href="#" class="news-item">
                        <span><img src="assets/images/space-1.gif" style="background-image: url('https://datxanhindochine.com/data/news/chung-cu-ha-noi-vi-tri-dep-1536x864.jpg')" alt="" class="w-100 thumb"></span>
                        <div class="news-item-body">
                            <p class="mb-0 text-truncate-set text-truncate-set-3">Review phường Hoàng Liệt Bản đồ , vị trí , dịch vụ tiện ích và các thông tin </p>
                        </div>
                    </a>
                    <a href="#" class="news-item">
                        <span><img src="assets/images/space-1.gif" style="background-image: url('https://datxanhindochine.com/data/news/546db51c9b7730296966-1-8100.jpg')" alt="" class="w-100 thumb"></span>
                        <div class="news-item-body">
                            <p class="mb-0 text-truncate-set text-truncate-set-3">Review phường Hoàng Liệt Bản đồ , vị trí , dịch vụ tiện ích và các thông tin </p>
                        </div>
                    </a>
                    <a href="#" class="news-item">
                        <span><img src="assets/images/space-1.gif" style="background-image: url('https://datxanhindochine.com/data/news/1vh-anh-1.jpg')" alt="" class="w-100 thumb"></span>
                        <div class="news-item-body">
                            <p class="mb-0 text-truncate-set text-truncate-set-3">Review phường Hoàng Liệt Bản đồ , vị trí , dịch vụ tiện ích và các thông tin </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="load-more text-center mt-4 pt-2">
            <div class="cta-btn ir">
                <a class="" href="#"><span class="cta-text font-weight-semibold">Xem tất cả</span><span class="cta-ico"><i class="icon-next"></i></span></a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')



@endsection
