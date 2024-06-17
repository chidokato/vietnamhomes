@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection



@section('css')
<link href="assets/css/widget.css" rel="stylesheet">
@endsection

@section('content')

<section class="sec-fiter-search floating-label">
    <div class="container">
        <div data-bs-toggle="button" class="d-md-none"><button type="button" class="btn btn-circle btn-toggle"><span class="icon-search"></span></button></div>
        <form>
            <div class="row g-3 justify-content-lg-end">
                <div class="col-lg-4">
                    <div class="input-group search-input">
                        <span class="input-group-text border100"><i class="icon-search"></i></span>
                        <input type="text" class="form-control" placeholder="Nhập địa chỉ, dự án">
                    </div>
                    <button type="submit" class="btn btn-circle">Tìm kiếm</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!------------------- CARD ------------------->

<section class="card-grid sales-sec list-tindang">

    <div class="container">
        
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="widget widget-list widget-hightlight mb-3">
                    <h4><span>Loại hình</span></h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheck1">
                        <label class="form-check-label" for="flexCheck1">
                            Chung cư
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheck2">
                        <label class="form-check-label" for="flexCheck2">
                            Biệt thự
                        </label>
                      </div>
                      <hr>
                    <h4><span>Tình thành</span></h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheck3">
                        <label class="form-check-label" for="flexCheck1">
                            Hà Nội
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheck4">
                        <label class="form-check-label" for="flexCheck2">
                            Hồ Chí Minh
                        </label>
                      </div>
                      <hr>
                      <h4><span>Quận huyện</span></h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheck5">
                        <label class="form-check-label" for="flexCheck1">
                            Cầu Giấy
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheck6">
                        <label class="form-check-label" for="flexCheck2">
                            Thanh Xuân
                        </label>
                      </div>
                      <hr> 
                      
                      
                      <h4><span>Mức giá</span></h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheck7">
                        <label class="form-check-label" for="flexCheck1">
                            Dưới 1 tỷ
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheck8">
                        <label class="form-check-label" for="flexCheck2">
                            1 - 2 tỷ
                        </label>
                      </div>
                </div>

            </div>
            <div class="col-lg-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Vietnam Homes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dự án</li>
                    </ol>
                </nav>
                <h1 class="text-uppercase title-cat">Các dự án bất động sản trên toàn quốc</h1>
                <div class="option-cat">
                    <div class="iteam"><a href="">Đang mở bán</a></div>
                    <div class="iteam"><a href="">Vietnam Homes phân phối độc quyền</a></div>
                </div>
                <div class="sort-box">
                    <span>có <span class="text-main font-weight-semibold">1.000</span> sản phẩm</span>
                    <div class="sort-ct">
                        <div class="dropdown">
                            <a class="btn ripple-effect dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Sắp xếp theo: giá tăng dần <i class="icon-down ms-2"></i></span>
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item checked" href="#">Giá tăng dần</a></li>
                            <li><a class="dropdown-item" href="#">Giá giảm dần</a></li>
                            <li><a class="dropdown-item" href="#">Mới nhất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-3 row-cols-md-3 g-4 " id="">
                    @for ($i=1; $i<=9; $i++)
                    <div class="col">
                        <div class="card card-s card-s4">
                            <a href="sale-detail.htm">
                                <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('https://datxanhindochine.com/data/product/z4594510880569_6a6ee8e09b3544f753bc998a7fa81f67.jpg');" alt="..."></span>
                                <span class="cat">
                                    <span class="room-status bg-red">Độc quyền</span>
                                    <span class="room-status">Mới ra mắt</span>
                                </span>
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
                                <div class="d-flex card-body-price">
                                    <div class="card-price">Giá từ: <span class="current-price">7 - 9 tỷ</span></div>  
                                    <div>Số căn: 800</div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                    
                    
                    
                </div>
                <div class="load-more text-center mt-4 pt-2">
                    <div class="cta-btn ir">
                        <a class="" href="#"><span class="cta-text font-weight-semibold">Xem thêm</span><span class="cta-ico"><i class="icon-down"></i></span></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!------------------- END CARD ------------------->

@endsection
