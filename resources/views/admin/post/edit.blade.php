@extends('admin.layout.main')
@section('content')
@include('admin.alert')
<?php use App\Models\Images; use App\Models\Option; ?>
<form method="POST" action="{{route('post.update', [$data->id])}}" enctype="multipart/form-data">
@csrf
@method('PUT')
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed">
    <button type="button" id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
    <ul class="navbar-nav ">
        <li class="nav-item"> <a class="nav-link line-1" href="{{route('post.index')}}" ><i class="fa fa-chevron-left" aria-hidden="true"></i> <span class="mobile-hide">Quay lại</span> </a> </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link" target="_blank" href="{{asset('')}}" >
                <i class="fas fa-external-link-alt mr-2"></i> {{__('lang.home')}}
            </a>
        </li>
        <li class="nav-item mobile-hide">
            <button type="reset" class="btn-danger mr-2 form-control"><i class="fas fa-sync"></i> Làm mới</button>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item">
            <button type="submit" class="btn-success form-control"><i class="far fa-save"></i> Lưu lại</button>
        </li>
    </ul>
</nav>

<div class="d-sm-flex align-items-center justify-content-between mb-3 flex" style="height: 38px;">
    <h2 class="h3 mb-0 text-gray-800 line-1 size-1-3-rem">Chỉnh sửa</h2>
</div>

<div class="row">
    <div class="col-xl-9 col-lg-9">
        <div class="linkneo" id="section1">
            <div class="card shadow mb-4" >
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Thông tin chung</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input value="{{$data->name}}" name="name" placeholder="..." type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="">Danh mục</label>
                                <select name='category_id' class="form-control select2" id="category">
                                    <?php addeditcat ($category,0,$str='',$data['category_id']); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Giá bán</label>
                                <div class="flex">
                                    <input value="{{$data->price}}" name="price" placeholder="..." type="text" class="form-control">
                                    <select name="unit" class="form-control">
                                        <option <?php if($data->unit == 'Tỷ'){echo 'selected';} ?> value="¥">Tỷ</option>
                                        <option <?php if($data->unit == 'VNĐ'){echo 'selected';} ?> value="₫">VNĐ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="linkneo" id="section2">
            <div class="card shadow mb-4" >
                <span class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Vị trí</h6>
                </span>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="">Địa chỉ</label>
                                <input name="address" placeholder="..." type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="">Tỉnh Thành</label>
                                <select name='' class="form-control select2" id="category">
                                  <?php addeditcat ($category,0,$str='',old('parent')); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="">Quận Huyện</label>
                                <select name='' class="form-control select2" id="category">
                                  <?php addeditcat ($category,0,$str='',old('parent')); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="">Phường Xã</label>
                                <select name='' class="form-control select2" id="category">
                                  <?php addeditcat ($category,0,$str='',old('parent')); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="linkneo" id="section3">
            <div class="card shadow mb-4" >
                <span class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Hình ảnh</h6>
                </span>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div style="display: flex;">
                                <div class="file-upload">
                                    <div class="file-upload-content" onclick="$('.file-upload-input').trigger( 'click' )">
                                        <img class="file-upload-image" src="{{ isset($data) ? 'data/product/'.$data->img : 'data/no_image.jpg' }}" />
                                    </div>
                                    <div class="image-upload-wrap">
                                        <input name="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                    </div>
                                </div>
                                
                                <span>
                                    @foreach($images as $val)
                                    <span class="view-img-ditail" id="detail_img">
                                        <img src="data/product/detail/{{$val->img}}">
                                        <button onClick="delete_row(this)" type="button" id="del_img_detail"> <i class="fa fa-times" aria-hidden="true"></i> </button>
                                        <input type="hidden"  name="id_img_detail" id="id_img_detail" value="{{$val->id}}" />
                                    </span>
                                    @endforeach
                                    <span class="image-preview" id="imagePreview"></span>
                                    <span class="file-input-wrapper">
                                        <input type="file" name="imgdetail[]" multiple class="file-input" id="imgInput">
                                        <img src="admin_asset/img/add-img.png" alt="Upload Image" class="custom-file-input1" id="customFileInput">
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row detail-img">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($section as $key => $val)
        <input type="hidden" value="{{$val->id}}" name="id-edit[]">
        <div class="linkneo section" id="section-{{$val->id}}">
            <button class="btn btn-danger remove-section" type="button">Xóa Section</button>
            <div class="card shadow mb-4" >
                <span class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{$val->tab}}</h6>
                </span>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                            <div class="form-group">
                                <label class="">STT</label>
                                <input name="stt-edit[]" value="{{$val->stt}}" placeholder="..." type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="">Tab</label>
                                <input name="tab-edit[]" value="{{$val->tab}}" placeholder="..." type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="">Heading</label>
                                <input name="heading-edit[]" value="{{$val->heading}}" placeholder="..." type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="">Hình ảnh</label>
                                <input multiple name="img_ss-edit{{$key}}[]" placeholder="..." type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea rows="" name="content-edit[]" class="form-control editor"> {!! $val->content !!} </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                @foreach($val->Images as $img)
                                <span class="view-img-ditail" id="detail_img">
                                    <img src="data/product/detail/{{$img->img}}">
                                    <button onClick="delete_row(this)" type="button" id="del_img_detail"> <i class="fa fa-times" aria-hidden="true"></i> </button>
                                    <input type="hidden"  name="id_img_detail" id="id_img_detail" value="{{$img->id}}" />
                                </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        <div id="sectionContainer"></div>

        <button id="addSectionButton" class="btn-success btn" type="button">Thêm Section</button>

        <br>
        <br>
        <div class="linkneo" id="seo">
            <div class="card shadow mb-4" >
                <span class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Cấu hình SEO</h6>
                </span>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="">Title</label>
                                <input value="{{$data->title}}" name="title" placeholder="..." type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="">description</label>
                                <input value="{{$data->description}}" name="description" placeholder="..." type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3" >
        <div class="card shadow mb-4" style="position: sticky; top: 60px;">
            <span class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Menu</h6>
            </span>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-product">
                            <ul>
                                <li><a class="scroll-link" href="#section1">Thông tin chung</a></li>
                                <li><a class="scroll-link" href="#section2">vitri</a></li>
                                <li><a class="scroll-link" href="#section3">Hình ảnh</a></li>
                                @foreach($section as $val)
                                <li><a class="scroll-link" href="#section-{{$val->id}}">{{$val->tab}}</a></li>
                                @endforeach
                                <li><a class="scroll-link" href="#seo">Cấu hình SEO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<?php 
    function addeditcat ($data, $parent=0, $str='',$select=0)
    {
        foreach ($data as $value) {
            if ($value['parent'] == $parent) {
                if($select != 0 && $value['id'] == $select )
                { ?>
                    <option value="<?php echo $value['id']; ?>" selected> <?php echo $str.$value['name']; ?> </option>
                <?php } else { ?>
                    <option value="<?php echo $value['id']; ?>" > <?php echo $str.$value['name']; ?> </option>
                <?php }
                
                addeditcat ($data, $value['id'], $str.'___',$select);
            }
        }
    }
?>
<script>
    function addCode() {
        document.getElementById("add_to_me").insertAdjacentHTML("beforeend",
                '<div class="form-group d-flex align-items-center justify-content-between" id="section_list"><input class="form-control" type="text" name="name_section:vi[]" placeholder="Tiếng Việt"><input class="form-control" type="text" name="name_section:en[]" placeholder="Tiếng Anh"><input class="form-control" type="text" name="name_section:cn[]" placeholder="Tiếng Trung"><button type="button" onClick="delete_row(this)" class="form-control w100"><i class="fa fa-minus-circle" aria-hidden="true"></i></button></div>');
    }
    function delete_row(e) {
        e.parentElement.remove();
    }



</script>
@endsection