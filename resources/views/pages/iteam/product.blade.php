<div class="col">
    <div class="card card-s card-s4">
        <a href="{{$val->category->slug}}/{{$val->slug}}">
            <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('data/product/{{$val->img}}');" alt="..."></span>
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
                <h5 class="card-title"><a href="{{$val->category->slug}}/{{$val->slug}}" class="text-truncate">{{$val->name}}</a></h5>
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