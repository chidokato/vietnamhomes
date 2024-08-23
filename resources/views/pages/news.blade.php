@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection
@section('css')
<link href="assets/css/widget.css" rel="stylesheet">
<link href="assets/css/news.css" rel="stylesheet">
@endsection
@section('content')

<section class="floating-label sec-fiter-search">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!------------------- BREADCRUMB ------------------->
                <section class="sec-breadcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                            </ol>
                        </nav>
                    </div>
                </section>
                <!------------------- END: BREADCRUMB ------------------->
            </div>
            <div class="col-md-6">
                <form>
                    <div class="row g-3 justify-content-lg-end">
                        <div class="col-lg-6">
                            <div class="input-group search-input">
                                <span class="input-group-text border100"><i class="icon-search"></i></span>
                                <input type="text" class="form-control" placeholder="Nhập địa chỉ, dự án">
                            </div>
                            <button type="submit" class="btn btn-circle">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</section>


<section class="card-grid news-sec">
    <div class="container">
        <h3 class="text-uppercase title-subpage">Thị trường bất động sản</h3>
        <div class="row">
            <div class="col-lg-9">
                <div class="news-hightlight">
                    <div class="row">
                        <div class="col-md-8">
                            <a class="card-overlay outline-effect" href="news-detail.htm">
                                <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('http://localhost/www/vietnamhomes/public/data/images/camau.jpg');"></span>
                                <div class="card-overlay-body">
                                    <div class="card-overlay-body-wrap">
                                        <div class="time-box">
                                            <span>21/10</span>
                                            <span><i class="icon-time me-1"></i>2022</span>
                                        </div>
                                        <p class="text-truncate-set text-truncate-set-2">Mật độ xay dựng là gì? Cách tính mật độ xây dựng chuẩn nhất 2022</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <div class="card-overlay-flex">
                                <a class="card-overlay card-overlay-sm outline-effect" href="news-detail.htm">
                                    <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('http://localhost/www/vietnamhomes/public/data/images/camau.jpg');"></span>
                                    <div class="card-overlay-body">
                                        <div class="card-overlay-body-wrap">
                                            <div class="time-box">
                                                <span>21/10</span>
                                                <span><i class="icon-time me-1"></i>2022</span>
                                            </div>
                                            <p class="text-truncate-set text-truncate-set-2">Mật độ xay dựng là gì? Cách tính mật độ xây dựng chuẩn nhất 2022</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="card-overlay card-overlay-sm outline-effect" href="news-detail.htm">
                                    <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('http://localhost/www/vietnamhomes/public/data/images/camau.jpg');"></span>
                                    <div class="card-overlay-body">
                                        <div class="card-overlay-body-wrap">
                                            <div class="time-box">
                                                <span>21/10</span>
                                                <span><i class="icon-time me-1"></i>2022</span>
                                            </div>
                                            <p class="text-truncate-set text-truncate-set-2">Mật độ xay dựng là gì? Cách tính mật độ xây dựng chuẩn nhất 2022</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row row-cols-1 g-4 horizontal-view" id="show-setting">
                    <div class="col">
                        <div class="card card-s card-s4">
                            <a href="news-detail.htm">
                                <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('http://localhost/www/vietnamhomes/public/data/images/camau.jpg');" alt="..."></span>
                            </a>
                            <div class="card-body">
                                <div class="card-body-wrap">
                                    <h5 class="card-title"><a href="news-detail.htm">Vì sao giá bất động sản ven sông lại có biên độ tăng giá tốt nhất TP.HCM hiện nay?</a></h5>
                                    <div class="card-info">
                                        <span><i class="icon-time me-2"></i>2 ngày trước</span>
                                        <span><i class="icon-user me-2"></i>Minh Hoàng</span>
                                    </div>
                                    <p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn 2 ngủ diện tích thông thủy 78m2 full đồ, khách mua chỉ cần dọn quần áo đến có thể ở ngay</p>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    
                </div>
                
               

            </div>
            <div class="col-lg-3 d-none d-lg-block">

                <div class="widget widget-list mb-3">
                    <h4><span>Tin tức</span></h4>
                    <ul>
                        <li><a href="#"><i class="icon-next me-2"></i>Thị trường bất động sản</a></li>
                        <li><a href="#"><i class="icon-next me-2"></i>Tư vấn tài chính</a></li>
                        <li><a href="#"><i class="icon-next me-2"></i>Tư vấn phong thủy</a></li>
                        <li><a href="#"><i class="icon-next me-2"></i>Dịch vụ công chứng</a></li>
                        <li><a href="#"><i class="icon-next me-2"></i>Thẩm định giá</a></li>
                        <li><a href="#"><i class="icon-next me-2"></i>Luật, thủ tục mua bán</a></li>
                        <li><a href="#"><i class="icon-next me-2"></i>Quy hoạch đô thị</a></li>
                    </ul>
                </div>

                
                <div class="widget widget-list widget-news mb-3">
                    <h4><span>Review 4 phương</span></h4>
                    <a href="#" class="news-item-captain">
                        <div class="news-item-captain-img">
                            <div class="news-item-captain-img-wrap">
                                <img src="assets/images/space-3.gif" style="background-image: url('http://localhost/www/vietnamhomes/public/data/images/camau.jpg');" alt="" class="w-100">
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
                        <span><img src="assets/images/space-3.gif" style="background-image: url('http://localhost/www/vietnamhomes/public/data/images/camau.jpg');" alt="" class="w-100"></span>
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


@endsection

@section('script')

@endsection