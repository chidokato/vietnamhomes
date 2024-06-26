@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/css/fonts.css" rel="stylesheet">
<link href="assets/css/common.css" rel="stylesheet">
<link href="assets/css/header.css" rel="stylesheet">
<link href="assets/css/footer.css" rel="stylesheet">
<link href="assets/css/form.css" rel="stylesheet">
<link href="assets/css/card.css" rel="stylesheet">
<link href="assets/css/rating.css" rel="stylesheet">
<link href="assets/css/widget.css" rel="stylesheet">
<link href="assets/css/article.css" rel="stylesheet">
<link href="assets/css/simpleLightbox.css" rel="stylesheet">
@endsection
@section('content')

<!------------------- NAVIGATOR ------------------->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Ninth navbar example">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/lg-hd.svg" alt="" class="mw-100"></a>
            <div class="toggle-menu" type="button" data-bs-toggle="button">
                <button class="navbar-toggler ico-menu" id="navbarToggler">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
    
          <div class="navbar-collapse flex-grow-1" id="navbarsExample07XL">
            <ul class="collapse navbar-nav mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.htm"><i class="icon-home"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sales.htm">Mua bán</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rents.htm">Cho thuê</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.htm">Dự án</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reviews.htm">Review 4 phương</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="news.htm" data-bs-toggle="dropdown" onclick="myFunctLink(this)">Tin tức</a>
                    <a class="expand dropdown-toggle d-lg-none" href="#" data-bs-toggle="dropdown"></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="#" class="submenu-link"><i class="icon-next me-2"></i>Tin phong thủy</a></li>
                            <li><a href="#" class="submenu-link"><i class="icon-next me-2"></i>Thẩm định giá</a></li>
                            <li><a href="#" class="submenu-link"><i class="icon-next me-2"></i>Dịch vụ công chứng</a></li>
                            <li><a href="#" class="submenu-link"><i class="icon-next me-2"></i>Quy hoạch đô thị</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="brokers.htm">Nhà môi giới</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="agents.htm">Đại lý</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item cta-btn il">
                  <a class="nav-link" href="#"><span class="cta-ico"><i class="icon-new"></i></span><span class="cta-text">Đăng tin</span></a>
                </li>
                <li class="nav-item nav-icon notification dropdown">
                    <a class="nav-link message" data-bs-toggle="dropdown" href="#"><i class="icon-bell"></i><span class="counter">2</span></a>
                    <div class="dropdown-menu scrollbar">
                        <div class="notify-tool">
                            <a href="#">Đánh đấu đọc tất cả</a>
                            <a href="#" class="view-all">Xem tất cả <i class="icon-next ms-1"></i></a>
                        </div>
                        <div class="widget-list widget-news">
                            <a href="#" class="news-item unread">
                                <span><img src="images/space-2.gif" style="background-image: url('https://media.ex-cdn.com/EXP/media.taichinhdoanhnghiep.net.vn/files/news/2021/03/26/ha-noi-diem-danh-nhieu-ong-trum-bat-dong-san-tri-hoan-nop-tien-dat-134146.jpg');" alt="" class="w-100"></span>
                                <div class="news-item-body">
                                    <p class="mb-0 text-truncate-set text-truncate-set-3">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                                    <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                                </div>
                            </a>
                            <a href="#" class="news-item unread">
                                <span><img src="images/space-2.gif" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="" class="w-100"></span>
                                <div class="news-item-body">
                                    <p class="mb-0 text-truncate-set text-truncate-set-3">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                                    <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                                </div>
                            </a>
                            <a href="#" class="news-item">
                                <span><img src="images/space-2.gif" style="background-image: url('https://truongvietnam.net/wp-content/uploads/2021/10/Nganh-bat-dong-san.png');" alt="" class="w-100"></span>
                                <div class="news-item-body">
                                    <p class="mb-0 text-truncate-set text-truncate-set-3">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                                    <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                                </div>
                            </a>
                            <a href="#" class="news-item">
                                <span><img src="images/space-2.gif" style="background-image: url('https://media.ex-cdn.com/EXP/media.taichinhdoanhnghiep.net.vn/files/news/2021/03/26/ha-noi-diem-danh-nhieu-ong-trum-bat-dong-san-tri-hoan-nop-tien-dat-134146.jpg');" alt="" class="w-100"></span>
                                <div class="news-item-body">
                                    <p class="mb-0 text-truncate-set text-truncate-set-3">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                                    <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                                </div>
                            </a>
                            <a href="#" class="news-item">
                                <span><img src="images/space-2.gif" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="" class="w-100"></span>
                                <div class="news-item-body">
                                    <p class="mb-0 text-truncate-set text-truncate-set-3">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                                    <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                                </div>
                            </a>
                            <a href="#" class="news-item">
                                <span><img src="images/space-2.gif" style="background-image: url('https://truongvietnam.net/wp-content/uploads/2021/10/Nganh-bat-dong-san.png');" alt="" class="w-100"></span>
                                <div class="news-item-body">
                                    <p class="mb-0 text-truncate-set text-truncate-set-3">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                                    <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-icon dropdown">
                    <!-- <a class="nav-link" data-bs-toggle="dropdown" href="#"><i class="icon-user"></i></a> -->
                    <a class="nav-link avata-header" data-bs-toggle="dropdown" href="#"><img src="https://pro-media.nhaongay.vn/images/2022/4/1648873358254-186849608.png_139_139"></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="#" class="submenu-link">Quản lý tin đăng</a></li>
                            <li><a href="#" class="submenu-link">Quản lý thông tin</a></li>
                            <li><a href="#" class="submenu-link">Tin quan tâm</a></li>
                            <li><a href="#" class="submenu-link">Đăng xuất</a></li>
                        </ul>
                    </div>
                </li>
              </ul>
          </div>
        </div>
      </nav>
</header>
<!------------------- END NAVIGATOR ------------------->


<!------------------- FILTER SEARCH ------------------->
<!-- <section class="sec-fiter-search floating-label">
    <div class="container">
        <div data-bs-toggle="button" class="d-md-none"><button type="button" class="btn btn-circle btn-toggle"><span class="icon-search"></span></button></div>
        <form>
            <div class="row g-3 justify-content-lg-end">
                <div class="col-lg-3">
                    <div class="input-group search-input">
                        <span class="input-group-text"><i class="icon-search"></i></span>
                        <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                    </div>
                </div>
                <div class="col-lg">
                    <div class="row g-3">
                        <div class="col-lg">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectType">
                                  <option selected>Mua bán</option>
                                  <option value="1">...</option>
                                </select>
                                <label for="floatingSelectType">Hình thức</label>
                              </div>
                        </div>
                        <div class="col-lg">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectType">
                                  <option selected>Tất cả</option>
                                  <option value="1">...</option>
                                </select>
                                <label for="floatingSelectType">Loại hình</label>
                              </div>
                        </div>
                        <div class="col-lg">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectCity">
                                  <option selected>Tất cả</option>
                                  <option value="1">...</option>
                                </select>
                                <label for="floatingSelectGrid">Tỉnh/Thành</label>
                              </div>
                        </div>
                        <div class="col-lg">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectDistrict">
                                  <option selected>Tất cả</option>
                                  <option value="1">...</option>
                                </select>
                                <label for="floatingSelectGrid">Quận/Huyện</label>
                              </div>
                        </div>
                        <div class="col-lg">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectWard">
                                  <option selected>Tất cả</option>
                                  <option value="1">...</option>
                                </select>
                                <label for="floatingSelectGrid">Mức giá</label>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"><button type="submit" class="btn btn-circle"><i class="icon-search"></i></button></div>
            </div>
        </form>
    </div>
</section> -->
<!------------------- END: FILTER SEARCH ------------------->

<!------------------- BREADCRUMB ------------------->
<section class="sec-breadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mua bán</li>
            </ol>
        </nav>
    </div>
</section>
<!------------------- END: BREADCRUMB ------------------->

<!------------------- GALLERY DESKTOP ------------------->
<section class="sec-gallery d-none d-md-block pt-4">
    <div class="container">
        <div class="news-hightlight">
            <div class="row g-3">
                <div class="col-lg-6">
                    <a class="card-overlay outline-effect video" title="1/10" href="https://www.youtube.com/embed/wLRe4rJzdgY?autoplay=true&muted=true">
                        <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg');"></span>
                        <div class="card-overlay-body">
                            <div>Căn hộ Roman Plaza</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" title="2/10" href="https://shelter.vn/wp-content/uploads/2021/02/thitruongbdsss.jpg">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://shelter.vn/wp-content/uploads/2021/02/thitruongbdsss.jpg');"></span>
                        </a>
                        <a class="card-overlay card-overlay-sm outline-effect" title="3/10" href="https://angialand.com.vn/wp-content/uploads/2020/06/phoi-canh-du-an-can-ho-chung-cu-park-vista-duong-nguyen-huu-tho-nha-be.jpg">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://angialand.com.vn/wp-content/uploads/2020/06/phoi-canh-du-an-can-ho-chung-cu-park-vista-duong-nguyen-huu-tho-nha-be.jpg');"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" title="4/10" href="https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png');"></span>
                        </a>
                        <a class="card-overlay card-overlay-sm outline-effect more" title="5/10" href="https://blog.rever.vn/hubfs/chinh-sach-ho-tro-tai-chinh-kich-cau-thi-truong-bat-dong-san-cuoi-nam-1.jpg">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://blog.rever.vn/hubfs/chinh-sach-ho-tro-tai-chinh-kich-cau-thi-truong-bat-dong-san-cuoi-nam-1.jpg');"></span>
                            <i class="btn-plus"></i>
                        </a>
                    </div>
                    <div class="more-item">
                        <a class="card-overlay" title="6/10" href="https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png"></a>
                        <a class="card-overlay" title="7/10" href="https://shelter.vn/wp-content/uploads/2021/02/thitruongbdsss.jpg"></a>
                        <a class="card-overlay" title="8/10" href="https://blog.rever.vn/hubfs/chinh-sach-ho-tro-tai-chinh-kich-cau-thi-truong-bat-dong-san-cuoi-nam-1.jpg"></a>
                        <a class="card-overlay" title="9/10" href="https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png"></a>
                        <a class="card-overlay" title="10/10" href="https://blog.rever.vn/hubfs/chinh-sach-ho-tro-tai-chinh-kich-cau-thi-truong-bat-dong-san-cuoi-nam-1.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!------------------- GALLERY MOBILE ------------------->
<section class="sec-gallery pt-4 d-md-none">
    <div class="container">
        <div class="position-relative grid-view mb-4 pb-lg-4">
            <div class="swiper gallery-mobile">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="card-overlay outline-effect video" title="1/4" href="https://www.youtube.com/embed/wLRe4rJzdgY?autoplay=true&muted=true">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg');"></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="card-overlay card-overlay-sm outline-effect" title="2/4" href="https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png');"></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="card-overlay card-overlay-sm outline-effect" title="3/4" href="https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png');"></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="card-overlay card-overlay-sm outline-effect" title="4/4" href="https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png');"></span>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination bullets"></div>
                <div class="swiper-pagination fraction" id="fraction"></div>
            </div>
        </div>
    </div>
</section>


<!------------------- CARD ------------------->
<section class="sale-detail-sec mt-4 pt-lg-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="main-content product-subpage chitiet-tindang">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="product-dt-header">
                                <div class="product-dt-header-ct">
                                    <div class="product-dt-header-status">
                                        <div class="product-dt-header-status-left">
                                            <span class="bg-subcolor">Non9035</span>
                                            <span class="bg-light">Đã sử dụng</span>
                                        </div>
                                        <span class="bg-secondary">Đã xác thực <i class="ms-1 icon-check"></i></span>
                                    </div>
                                </div>
                                <div class="product-dt-header-title">
                                    <h2>Bán ngay dự án chung cư cao cấp Roman Plaza</h2>
                                    <div class="mb-2 text-muted">
                                        <small><i class="icon-location me-1"></i>Phường Kim Mã, Quận Ba Đình, Hà Nội</small>
                                    </div>
                                    <div class="d-md-none" id="fix-ft">
                                        <div class="product-price">
                                            <div class="new-price">
                                                <span>Giá bán</span>
                                                <h1>3.5 tỷ</h1>
                                            </div>
                                            <div class="old-price">3.9 tỷ</div>
                                        </div>
                                        <div class="product-contact">
                                            <h2 class="d-none d-lg-block line-b"></h2>
                                            <a class="btn btn-tel"><i class="icon-phone-filled"></i></a>
                                            <a class="btn btn-mail" href="#info-customer" data-bs-toggle="modal"><i class="icon-mail-filled"></i></a>
                                        </div>
                                    </div>
                                    <div id="fix-ft-anchor"></div>
                                    <a href="#">Tin trong bảng hàng <i class="icon-next"></i></a>
                                </div>
                                <div class="product-dt-header-icons">
                                    <div class="product-dt-header-icons-wrap product-dt-header-icons-left">
                                        <span><i class="icon-acreage"></i>50m2</span>
                                        <span><i class="icon-bed"></i>2PN</span>
                                        <span><i class="icon-bathroom"></i>2WC</span>
                                    </div>
                                    <div class="product-dt-header-icons-wrap product-dt-header-icons-right">
                                        <a href="#"><i class="icon-deagree"></i>VR360</a>
                                        <a href="#"><i class="icon-brochure"></i>Brochure</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-article">
                                <div class="product-overview" id="overview">
                                    <ul class="nav scrollspy-product" id="scrollspy-product">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="http://localhost/www/vietnamhomes/public/gioi-thieu#product-meta">Mô tả</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/www/vietnamhomes/public/gioi-thieu#product-detail">Chi tiết</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/www/vietnamhomes/public/gioi-thieu#product-map">Maps</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/www/vietnamhomes/public/gioi-thieu#product-chart">Biểu đồ giá</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/www/vietnamhomes/public/gioi-thieu#product-ls">Lãi suất</a>
                                        </li>
                                    </ul>
                                    <div>
                                        <div id="product-meta" class="scrolloverview">
                                            <div class="product-detail product-utilities">
                                                <h5 class="line-b">Mô tả</h5>
                                                <p>Mật độ xây dựng là gì? Dựa vào quy định tại “Quy chuẩn kỹ thuật Quốc gia về Quy hoạch xây dựng” thì mật độ xây dựng chính là tỉ lệ chiếm đất của các công trình trên tổng diện tích khu đất. (Không bao gồm diện tích đất của các công trình khác như: bể bơi, tiểu cảnh, sân thể thao…….).</p>
                                                <p>Đặc biệt, mật độ xây dựng là chỉ số trực quan nhất giúp chúng ta so sánh được quỹ đất cho cư dân sinh hoạt. Việc tuân thủ mật độ xây dựng, sẽ đảm bảo được không gian sinh hoạt khoa học, đúng với nhu cầu sử dụng. Hơn nữa, mật độ xây dựng chính là thước đo quan trọng đánh giá sự văn minh và giá trị của các công trình xây dựng, khu đô thị và khu dân cư.</p>
                                            </div>
                                        </div>
                                        <div id="product-detail" class="scrolloverview">
                                            <div class="product-detail product-utilities">
                                                <h5 class="line-b">Chi tiết</h5>
                                                <div class="row g-5 justify-content-between">
                                                    <div class="col-lg-6">
                                                        <div class="utilitie-item">
                                                            <div><i class="icon-time me-2"></i>Ngày đăng</div>
                                                            <span class="text-main">21/6/2022</span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-bedroom-2"></i>Phòng ngủ</div>
                                                            <span class="text-main">3</span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-bathroom-2"></i>Phòng tắm</div>
                                                            <span class="text-main">3</span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-direction"></i>Hướng</div>
                                                            <span class="text-main">Nam</span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-home-status"></i>Hiện trạng nhà</div>
                                                            <span class="text-main">Để trống</span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-paper"></i>Giấy tờ</div>
                                                            <span class="text-main">Sổ hồng</span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-home-measure"></i>Kết cấu nhà</div>
                                                            <span class="text-main">1 trệt + 1 lầu</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="utilitie-item">
                                                            <div><i class="icon-time me-2"></i>Ngày update</div>
                                                            <span class="text-main">22/6/2022</span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-acreage-2"></i>Diện tích đất</div>
                                                            <span class="text-main">82.1 m<sup>2</sup></span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-home-acreage"></i>Diện tích sử dụng</div>
                                                            <span class="text-main">130.6 m<sup>2</sup></span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-home-measure"></i>Chiều dài</div>
                                                            <span class="text-main">15.44 m</span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-home-measure"></i>Chiều rộng</div>
                                                            <span class="text-main">5.28 m</span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-stretch"></i>Độ rộng hẻm</div>
                                                            <span class="text-main">5.0 m</span>
                                                        </div>
                                                        <div class="utilitie-item">
                                                            <div><i class="me-2 icon-stretch"></i>Độ rộng mặt tiền đường</div>
                                                            <span class="text-main">---</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="product-map" class="scrolloverview">
                                            <div class="product-detail product-map">
                                                <h5 class="line-b">Maps</h5>
                                                <div class="group-map">
                                                    <button class="btn btn-outline active" type="button">Bản đồ</button>
                                                    <button class="btn btn-outline" type="button">Street view</button>
                                                    <button class="btn btn-outline" type="button">Trường học</button>
                                                    <button class="btn btn-outline" type="button">Tiện ích khu vực</button>
                                                </div>
                                                <div class="product-map-ct">
                                                    <div class="pb-3"><img src="assets/previews/review-map.jpg" alt="" class="mw-100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="product-chart" class="scrolloverview">
                                            <div class="product-detail product-map">
                                                <h5 class="line-b">Biểu đồ giá</h5>
                                                <ul class="type-chart">
                                                    <li><a href="#">Biến động giá</a></li>
                                                    <li><a href="#">Giá đất theo đường</a></li>
                                                </ul>
                                                <div class="estimate-detail-ct mb-4 pb-2">
                                                    <div class="chart-detail">
                                                        <small>triệu/m2</small>
                                                        <canvas id="fluctuatingPrice"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div id="product-ls" class="scrolloverview">
                                            <div class="product-detail product-map">
                                                <h5 class="line-b">Lãi suất</h5>
                                                <div class="loan-ct">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <form class="loan-form">
                                                                <h6>Tính toán khoản vay</h6>
                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Giá trị bất động sản</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" id="" class="form-control" placeholder="Nhập số tiền">
                                                                        <span class="input-group-text" id="">VND</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-md-8">
                                                                        <label for="" class="form-label">Khoản vay</label>
                                                                        <div class="input-group ">
                                                                            <input type="text" id="" class="form-control" placeholder="Nhập số tiền vay">
                                                                            <span class="input-group-text" id="">VND</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="" class="form-label">Tỉ lệ</label>
                                                                        <div class="input-group ">
                                                                            <input type="text" id="" class="form-control" placeholder="0">
                                                                            <span class="input-group-text" id="">%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Ngân hàng vay</label>
                                                                    <select class="form-select">
                                                                        <option selected>Vietcombank</option>
                                                                        <option value="1">2</option>
                                                                        <option value="2">3</option>
                                                                        <option value="3">4</option>
                                                                    </select>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col">
                                                                        <label for="" class="form-label">Thời hạn vay</label>
                                                                        <select class="form-select">
                                                                            <option selected>10 năm</option>
                                                                            <option value="1">...</option>
                                                                            <option value="2">...</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="" class="form-label">Lãi suất</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" id="" class="form-control" placeholder="0">
                                                                            <span class="input-group-text" id="">%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3"><input type="submit" class="btn btn-main" value="Xem kết quả" /></div>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="loan-result">
                                                                <h6>Kết quả (VND)</h6>
                                                                <div class="loan-result-chart">
                                                                    <canvas id="loanChart"></canvas>
                                                                    <div class="donut-inner">
                                                                        <h6>4,5</h6>
                                                                        <span>tỷ</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6 border-end">
                                                                        <div class="before-payment">
                                                                            <i>Cần trả trước</i>
                                                                            <span class="text-sub">2.750.000.000</span>
                                                                        </div>
                                                                        <div class="origin-payment">
                                                                            <i>Gốc cần trả</i>
                                                                            <span class="text-main">1.150.000.000</span>
                                                                        </div>
                                                                        <div class="interest-payment">
                                                                            <i>Lãi cần trả</i>
                                                                            <span style="color:#00adbb">750.000.000</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="d-flex flex-column justify-content-between h-100">
                                                                            <div>
                                                                                <div class="px-lg-3"><i>Thanh toán hàng tháng</i></div>
                                                                                <div class="amortization">14,75 triệu</div>
                                                                            </div>
                                                                            <button type="button" class="btn btn-add">Đăng ký vay</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 d-none d-md-block">
                            <div class="product-price affix">
                                <div class="new-price">
                                    <span>Giá bán</span>
                                    <h1>3,75 tỷ</h1>
                                </div>
                                <div class="old-price">3.9 tỷ</div>
                                <div class="product-contact">
                                    <a class="btn btn-tel"><i class="icon-phone"></i>0972029093</a>
                                    <a class="btn btn-mail" href="#info-customer" data-bs-toggle="modal"><i class="icon-mail"></i>Liên hệ ngay</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">

                <div class="card card-s card-s3 widget widget-broker">
                    <a href="#"><span class="vip"><img src="assets/images/space-2.gif" class="card-img-top" style="background-image: url('assets/previews/brokers/1.jpg');" alt="..."></span></a>
                    <div class="card-body">
                        <div class="card-body-wrap">
                            <div class="px-lg-2">
                                <small class="text-sub">Thành viên vip</small>
                                <h5 class="card-title"><a href="#" class="text-truncate">Nguyễn Minh Chiến</a></h5>
                            </div>
                            <div class="mb-3 widget-broker-btn">
                                <a href="#" class="btn btn-outline">100 tin rao <i class="icon-next"></i></a>
                                <a href="#" class="btn btn-outline btn-outline-subcolor"><i class="icon-shop"></i> Xem sàn <i class="icon-next"></i></a>
                            </div>
                            <div class="card-info px-lg-2">
                                <span><i class="icon-call me-2"></i>0989 595 989</span>
                                <span><i class="icon-location me-2"></i>Thanh Xuân, Hà Nội</span>
                                <span><i class="icon-experience me-2"></i>8 năm kinh nghiệm</span>
                            </div>
                        </div>
                        <div class="card-ct px-lg-2">
                            <button type="button" class="btn btn-outline"><span>Tư vấn ngay <i class="icon-chat ms-1"></i></span></button>
                        </div>
                    </div>
                </div>

                <div class="widget widget-appointment">
                    <h4 class="line-b">Đăng ký xem nhà</h4>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="" placeholder="Họ tên của bạn">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="" placeholder="Nhập email">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="mb-3 datepicker">
                            <input type="date" class="form-control" id="" placeholder="Ngày xem">
                            <i><img src="assets/images/ico-datepicker.svg" alt=""></i>
                        </div>
                        <div class="text-center"><div class="cta-btn ir"><a class="" href="register2.htm"><span class="cta-text font-weight-semibold">Đăng ký ngay</span><span class="cta-ico"><i class="icon-next"></i></span></a></div></div>
                    </form>
                </div>
                
                <div class="widget widget-list widget-news mb-3">
                    <h4><span>Review 4 phương</span></h4>
                    <a href="#" class="news-item-captain">
                        <div class="news-item-captain-img">
                            <div class="news-item-captain-img-wrap">
                                <img src="assets/images/space-3.gif" style="background-image: url('https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png');" alt="" class="w-100">
                                <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                                <span class="view-more">Chi tiết</span>
                            </div>
                        </div>
                        <div class="news-item-captain-body">
                            <h5>Review phường Hoàng Liệt bản đồ, vị trí, các tiện ịch xung quanh</h5>
                            <p class="mb-0  text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn 2 ngủ diện tích thông thủy 78m2 full đồ, khách mua chỉ cần dọn quần áo đến có thể ở ngay</p>
                        </div>
                    </a>
                    <a href="#" class="news-item">
                        <span><img src="assets/images/space-3.gif" style="background-image: url('https://media.ex-cdn.com/EXP/media.taichinhdoanhnghiep.net.vn/files/news/2021/03/26/ha-noi-diem-danh-nhieu-ong-trum-bat-dong-san-tri-hoan-nop-tien-dat-134146.jpg');" alt="" class="w-100"></span>
                        <div class="news-item-body">
                            <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                            <p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                        </div>
                    </a>
                    <a href="#" class="news-item">
                        <span><img src="assets/images/space-3.gif" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="" class="w-100"></span>
                        <div class="news-item-body">
                            <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                            <p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                        </div>
                    </a>
                    <a href="#" class="news-item">
                        <span><img src="assets/images/space-3.gif" style="background-image: url('https://truongvietnam.net/wp-content/uploads/2021/10/Nganh-bat-dong-san.png');" alt="" class="w-100"></span>
                        <div class="news-item-body">
                            <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                            <p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                        </div>
                    </a>
                    <a href="#" class="news-item">
                        <span><img src="assets/images/space-3.gif" style="background-image: url('https://media.ex-cdn.com/EXP/media.taichinhdoanhnghiep.net.vn/files/news/2021/03/26/ha-noi-diem-danh-nhieu-ong-trum-bat-dong-san-tri-hoan-nop-tien-dat-134146.jpg');" alt="" class="w-100"></span>
                        <div class="news-item-body">
                            <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                            <p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                        </div>
                    </a>
                    <a href="#" class="news-item">
                        <span><img src="assets/images/space-3.gif" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="" class="w-100"></span>
                        <div class="news-item-body">
                            <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                            <p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                        </div>
                    </a>
                    <a href="#" class="news-item">
                        <span><img src="assets/images/space-3.gif" style="background-image: url('https://truongvietnam.net/wp-content/uploads/2021/10/Nganh-bat-dong-san.png');" alt="" class="w-100"></span>
                        <div class="news-item-body">
                            <span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
                            <p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!------------------- END CARD ------------------->

<!-- INFO CUSTOMER -->
<div class="modal fade info-customer" id="info-customer">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-bs-dismiss="modal"><img src="assets/images/fs-p-close.png" class="mw-100" alt=""></button>
            <div class="info-customer-wrap">
                <img src="assets/images/info-customer-figure.png" class="" alt="">
                <div class="info-customer-content">
                    <div class="primary-form">
                        <div class="account-form-content px-md-4 pt-3 pt-md-0">
                            <h2 class="line-b mb-4">Liên hệ với tôi</h2>

                            <form class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="yourName" placeholder="Họ và tên">
                                        <label for="yourPhone">Họ và tên</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="yourEmail" placeholder="Email">
                                        <label for="yourEmail">Email</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="yourPhone" placeholder="Số điện thoại">
                                        <label for="yourPhone">Số điện thoại</label>
                                    </div>
                                </div>
                                <div class="load-more text-center mt-4 pt-2">
                                    <div class="cta-btn ir">
                                        <a class="" data-bs-dismiss="modal" href="#info-system" data-bs-toggle="modal"><span class="cta-text font-weight-semibold">Gửi đi</span><span class="cta-ico"><i class="icon-next"></i></span></a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

<!-- SYSTEM POPUP -->
<div class="modal fade info-customer" id="info-system">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-bs-dismiss="modal"><img src="assets/images/fs-p-close.png" class="mw-100" alt=""></button>
            <div class="info-customer-wrap">
                <img src="assets/images/info-customer-figure.png" class="" alt="">
                <div class="info-customer-content">
                    <div class="primary-form">
                        <div class="account-form-content px-md-4 pt-3 pt-md-0">
                            <div class="text-center text-md-start">
                                <div class="primary-title pt-md-0">
                                    <h3><span class="cover-title-filled">NHẬN THÔNG TIN</span><span class="position-relative">ĐỊNH GIÁ NHÀ BẠN</span></h3>
                                </div> 
                            </div>
                            <p class="mt-5">Bạn đã gửi thông tin thành công.</p>
                            <p class="mb-0">Thông tin của bạn sẽ được <span class="text-sub font-weight-semibold">Nhà Ở Ngay</span><br> đánh giá trong 24h làm việc tiếp theo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>




<!------------------- PRODUCTs ------------------->
<section class="rating-sec">
    <div class="container">
        <div class="text-center text-lg-start">
            <div class="primary-title">
                <h3><span class="cover-title-filled">Đánh giá của</span><span class="position-relative">khách hàng</span></h3>
            </div>
        </div>
        <div class="row g-lg-5">
            <div class="col-lg-5">
                <div class="ratings">
                    <div class="rate-title">
                        <h2 class="rate-number">4.5</h2>
                        <div class="rate rate-stars">
                            <ul class="four half">
                                <li><i class="icon-star-empty"></i></li>
                                <li><i class="icon-star-empty"></i></li>
                                <li><i class="icon-star-empty"></i></li>
                                <li><i class="icon-star-empty"></i></li>
                                <li><i class="icon-star-empty"></i></li>
                            </ul>
                            <span>1.200 đánh giá</span>
                        </div>
                    </div>
                    <div class="rate-detail">
                        <div class="rate rate-item">
                            <ul class="five">
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                            </ul>
                            <div class="progress-content">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span>75</span>
                            </div>
                        </div>
                        <div class="rate rate-item">
                            <ul class="four">
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                            </ul>
                            <div class="progress-content">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span>55</span>
                            </div>
                        </div>
                        <div class="rate rate-item">
                            <ul class="three">
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                            </ul>
                            <div class="progress-content">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span>32</span>
                            </div>
                        </div>
                        <div class="rate rate-item">
                            <ul class="two">
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                            </ul>
                            <div class="progress-content">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span>20</span>
                            </div>
                        </div>
                        <div class="rate rate-item">
                            <ul class="one">
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                                <li><i class="icon-star-fill"></i></li>
                            </ul>
                            <div class="progress-content">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span>12</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="comment-box ps-lg-4">
                    <div class="comment-item post">
                        <span class="avatar"><img src="assets/images/space-2.gif" class="thumb w-100" style="background-image: url('assets/previews/brokers/4.jpg');" alt="..."></span>
                        <div class="comment-content">
                            <div class="comment-header">
                                <div class="row justify-content-between align-items-center mb-3 w-100 g-md-0">
                                    <div class="col-7">
                                        <span class="mb-0">Mức độ hài lòng của bạn</span>
                                    </div>
                                    <div class="col-5 text-end">
                                        <div class="radio-star">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                            <label class="icon-star-fill" for="inlineRadio5"></label>
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                            <label class="icon-star-fill" for="inlineRadio4"></label>
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                            <label class="icon-star-fill" for="inlineRadio3"></label>
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="icon-star-fill" for="inlineRadio2"></label>
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="icon-star-fill" for="inlineRadio1"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-body">
                                <textarea class="form-control" rows="3" placeholder="Viết đánh giá của bạn..."></textarea>
                                <button type="submit" class="btn btn-primary">Gửi</button>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item">
                        <span class="avatar"><img src="assets/images/space-2.gif" class="thumb w-100" style="background-image: url('assets/previews/brokers/1.jpg');" alt="..."></span>
                        <div class="comment-content">
                            <div class="comment-header">
                                <div class="comment-header-user">
                                    <span class="username">Phạm Toàn Thắng</span>
                                    <div class="rate rate-item">
                                        <ul class="five">
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="time"><i class="icon-time me-1"></i>30 phút trước</span>
                            </div>
                            <div class="comment-body">
                                <p>Tôi đang làm việc trong ngành môi giới. Và công ty của tôi cũng thưởng bằng hiện vật: đó là lời hứa sẽ thưởng!</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item">
                        <span class="avatar"><img src="assets/images/space-2.gif" class="thumb w-100" style="background-image: url('assets/previews/brokers/2.jpg');" alt="..."></span>
                        <div class="comment-content">
                            <div class="comment-header">
                                <div class="comment-header-user">
                                    <span class="username">Nguyễn Hải Long</span>
                                    <div class="rate rate-item">
                                        <ul class="five">
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="time"><i class="icon-time me-1"></i>30 phút trước</span>
                            </div>
                            <div class="comment-body">
                                <p>Tôi đang làm việc trong ngành môi giới. Và công ty của tôi cũng thưởng bằng hiện vật: đó là lời hứa sẽ thưởng!</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item">
                        <span class="avatar"><img src="assets/images/space-2.gif" class="thumb w-100" style="background-image: url('assets/previews/brokers/3.jpg');" alt="..."></span>
                        <div class="comment-content">
                            <div class="comment-header">
                                <div class="comment-header-user">
                                    <span class="username">Nguyễn Hồng Nhung</span>
                                    <div class="rate rate-item">
                                        <ul class="five">
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                            <li><i class="icon-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="time"><i class="icon-time me-1"></i>30 phút trước</span>
                            </div>
                            <div class="comment-body">
                                <p>Tôi đang làm việc trong ngành môi giới. Và công ty của tôi cũng thưởng bằng hiện vật: đó là lời hứa sẽ thưởng!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!------------------- RELATED ------------------->
<div class="related-sec">
    <div class="container">
        <div class="related">
            <div class="text-center">
                <div class="primary-title">
                    <h3><span class="cover-title-filled">Sản phẩm liên quan</span><span class="position-relative">Cùng giá - Khu vực</span></h3>
                </div>
            </div>
            <div class="position-relative grid-view">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card card-s card-s4">
                                <a href="#">
                                    <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="..."></span>
                                    <span class="cat">
                                        <span class="room-status">Đã sử dụng</span>
                                    </span>
                                    <span class="view-more">Chi tiết</span>
                                    <div class="product-status">
                                        <span><i class="icon-acreage me-1"></i>50m2</span>
                                        <span><i class="icon-bed me-1"></i>2PN</span>
                                        <span><i class="icon-bathroom me-1"></i>2WC</span>
                                    </div>
                                </a>
                                <div class="card-body card-body-new">
                                    <div class="card-body-wrap">
                                        <h5 class="card-title"><a href="#" class="text-truncate-set text-truncate-set-2" style="display: -webkit-box;">Newtatco Xuân Đỉnh</a></h5>
                                        <div class="card-info">
                                            <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
                                            <span><i class="icon-time me-2"></i>2 ngày trước</span>
                                            <a href="#" class="cat-link text-sub">Nhà riêng</a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-price"><span class="current-price"> <span>Giá: </span> 4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
                                        <a class="card-contact" href="tel:0919511881"><i class="icon-phone-filled"></i><span class="ps-2">Gọi<br>ngay</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card-s card-s4">
                                <a href="#">
                                    <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="..."></span>
                                    <span class="cat">
                                        <span class="room-status">Đã sử dụng</span>
                                    </span>
                                    <span class="view-more">Chi tiết</span>
                                    <div class="product-status">
                                        <span><i class="icon-acreage me-1"></i>50m2</span>
                                        <span><i class="icon-bed me-1"></i>2PN</span>
                                        <span><i class="icon-bathroom me-1"></i>2WC</span>
                                    </div>
                                </a>
                                <div class="card-body card-body-new">
                                    <div class="card-body-wrap">
                                        <h5 class="card-title"><a href="#" class="text-truncate-set text-truncate-set-2" style="display: -webkit-box;">Newtatco Xuân Đỉnh</a></h5>
                                        <div class="card-info">
                                            <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
                                            <span><i class="icon-time me-2"></i>2 ngày trước</span>
                                            <a href="#" class="cat-link text-sub">Nhà riêng</a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-price"><span class="current-price"> <span>Giá: </span> 4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
                                        <a class="card-contact" href="tel:0919511881"><i class="icon-phone-filled"></i><span class="ps-2">Gọi<br>ngay</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card-s card-s4">
                                <a href="#">
                                    <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="..."></span>
                                    <span class="cat">
                                        <span class="room-status">Đã sử dụng</span>
                                    </span>
                                    <span class="view-more">Chi tiết</span>
                                    <div class="product-status">
                                        <span><i class="icon-acreage me-1"></i>50m2</span>
                                        <span><i class="icon-bed me-1"></i>2PN</span>
                                        <span><i class="icon-bathroom me-1"></i>2WC</span>
                                    </div>
                                </a>
                                <div class="card-body card-body-new">
                                    <div class="card-body-wrap">
                                        <h5 class="card-title"><a href="#" class="text-truncate-set text-truncate-set-2" style="display: -webkit-box;">Newtatco Xuân Đỉnh</a></h5>
                                        <div class="card-info">
                                            <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
                                            <span><i class="icon-time me-2"></i>2 ngày trước</span>
                                            <a href="#" class="cat-link text-sub">Nhà riêng</a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-price"><span class="current-price"> <span>Giá: </span> 4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
                                        <a class="card-contact" href="tel:0919511881"><i class="icon-phone-filled"></i><span class="ps-2">Gọi<br>ngay</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card-s card-s4">
                                <a href="#">
                                    <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="..."></span>
                                    <span class="cat">
                                        <span class="room-status">Đã sử dụng</span>
                                    </span>
                                    <span class="view-more">Chi tiết</span>
                                    <div class="product-status">
                                        <span><i class="icon-acreage me-1"></i>50m2</span>
                                        <span><i class="icon-bed me-1"></i>2PN</span>
                                        <span><i class="icon-bathroom me-1"></i>2WC</span>
                                    </div>
                                </a>
                                <div class="card-body card-body-new">
                                    <div class="card-body-wrap">
                                        <h5 class="card-title"><a href="#" class="text-truncate-set text-truncate-set-2" style="display: -webkit-box;">Newtatco Xuân Đỉnh</a></h5>
                                        <div class="card-info">
                                            <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
                                            <span><i class="icon-time me-2"></i>2 ngày trước</span>
                                            <a href="#" class="cat-link text-sub">Nhà riêng</a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-price"><span class="current-price"> <span>Giá: </span> 4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
                                        <a class="card-contact" href="tel:0919511881"><i class="icon-phone-filled"></i><span class="ps-2">Gọi<br>ngay</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!------------------- END RELATED ------------------->

<!------------------- FOOTER ------------------->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 ft-contact-wrap">
                <div class="ft-contact">
                    <div class="ft-contact-item">
                        <div class="ft-contact-item-text">
                            <h6>HOTLINE TƯ VẤN</h6>
                            <span><a href="tel:0919511881">0919.51.18.81</a></span>
                        </div>
                        <span class="ft-contact-item-ico"><i class="icon-phone-filled"></i></span>
                    </div>
                    <div class="ft-contact-item">
                        <div class="ft-contact-item-text">
                            <h6>Email</h6>
                            <span><a href="mailto:cskh@nhaongay.vn" class="">cskh@nhaongay.vn</a></span>
                        </div>
                        <span class="ft-contact-item-ico"><i class="icon-mail-filled"></i></span>
                    </div>
                    <div class="ft-contact-item">
                        <div class="ft-contact-item-text">
                            <h6>ĐỊA CHỈ VĂN PHÒNG</h6>
                            <span>61 Ngụy Như Kon Tum, Quận Thanh Xuân, Hà Nội</span>
                        </div>
                        <span class="ft-contact-item-ico"><i class="icon-building-filled"></i></span>
                    </div>
                </div>
                <div class="ft-social">
                    <ul class="social">
                        <li><a class=""><i class="icon-facebook"></i></a></li>
                        <li><a class=""><i class="icon-youtube"></i></a></li>
                        <li><a class=""><i class="icon-zalo"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 ft-main">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="ft-link">
                            <h5 class="line-b">VỀ CHÚNG TÔI</h5>
                            <ul class="ft-link-items">
                                <li><a href="#" class="">Báo giá & Hỗ trợ</a></li>
                                <li><a href="#" class="">Câu hỏi thường gặp</a></li>
                                <li><a href="#" class="">Về chúng tôi</a></li>
                                <li><a href="#" class="">Tin nội bộ</a></li>
                                <li><a href="contact.htm" class="">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="ft-link">
                            <h5 class="line-b">QUY ĐỊNH</h5>
                            <ul class="ft-link-items">
                                <li><a href="#" class="">Quy chế hoạt động</a></li>
                                <li><a href="#" class="">Quy định đăng tin</a></li>
                                <li><a href="#" class="">Điều khoản thỏa thuận</a></li>
                                <li><a href="#" class="">Thành viên và bảo mật</a></li>
                                <li><a href="#" class="">Giải quyết tranh chấp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="ft-link">
                            <div class="mb-4">
                                <h5 class="line-b">HỖ TRỢ KHÁCH HÀNG</h5>
                                <ul class="ft-link-items">
                                    <li><a href="mailto:cskh@nhaongay.vn" class=""><i class="icon-mail me-2"></i>cskh@nhaongay.vn</a></li>
                                    <li><a href="tel:0919511881"><i class="icon-call me-2"></i>0919.51.18.81</a></li>
                                </ul>
                            </div>
                            <div class="mb-4">
                                <h5 class="line-b">HỖ TRỢ KỸ THUẬT</h5>
                                <ul class="ft-link-items">
                                    <li><a href="mailto:kythuat@nhaongay.vn" class=""><i class="icon-mail me-2"></i>kythuat@nhaongay.vn</a></li>
                                    <li><a href="tel:0919511881"><i class="icon-call me-2"></i>0919.51.18.81</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="ft-info">
                            <div class="line-b"><img src="images/lg-ft.svg" alt=""></div>
                            <p class="mb-2">Địa chỉ: 61 Ngụy Như Kon Tum, Quận Thanh Xuân, Hà Nội</p>
                            <p class="mb-2">Điện thoại: 0919.51.18.81</p>
                            <p class="mb-2">MST: 0109481608 - Ngày cấp 05/01/2021</p>
                            <p class="mb-2">Nơi cấp: Sở Kế hoạch và Đầu tư Thành phố Hà Nội, Việt Nam</p>
                        </div>
                    </div>
                </div>

                
                <div class="row ft-register-subscribe mb-4">
                    <div class="col-lg-6 align-self-center"><span class="line-b">ĐĂNG KÝ NHẬN BẢN TIN TỪ <b>NHÀ Ở NGAY</b></span></div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nhập email của bạn" aria-label="Nhập email của bạn" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="icon-send"></i></button>
                        </div>
                    </div>
                </div>
                <p class="ft-copyright text-end">Copyright © 2021 Nhà Ở Ngay, All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!------------------- END: FOOTER ------------------->

@endsection
@section('js')
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/chart.nhaongay.js"></script>
<script src="assets/js/simpleLightbox.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script>
    const myChart2 = new Chart(
      document.getElementById('fluctuatingPrice'),
      fluctuatingPrice,
    );

    const myChart3 = new Chart(
      document.getElementById('loanChart'),
      loanChart,
    );  
</script>
<script>
        var swiper = new Swiper(".related-sec .mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".related-sec .swiper-pagination",
                clickable: true,
            },
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                // when window width is >= 640px
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: ".related-sec .swiper-button-next",
                        prevEl: ".related-sec .swiper-button-prev",
                    },
                }
            },  
        });

        const fraction = document.getElementById("fraction");
        const slides = document.querySelectorAll(".swiper.gallery-mobile .swiper-slide");
        const slideCount = slides.length;
        fraction.textContent = `1 / ${slideCount}`;

        var swiper2 = new Swiper(".swiper.gallery-mobile", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop:true,
            pagination: {
                el: ".swiper.gallery-mobile .bullets",
                clickable: true,
            },
            autoplay: {
                delay: 20500,
                disableOnInteraction: false,
            },
            on: {
                slideChange: (index) => {
                    if(index.activeIndex > slideCount || index.activeIndex < 1) {
                        if(index.activeIndex < 1) {
                            fraction.textContent = `${slideCount} / ${slideCount}`;
                        }
                        else {
                            fraction.textContent = `1 / ${slideCount}`;
                        }   
                    }
                    else {
                        fraction.textContent = `${index.activeIndex} / ${slideCount}`;
                    }
            }
        }
        });

        var lightbox = new SimpleLightbox({
            elements: '.sec-gallery .card-overlay',
        });
</script>
@endsection