@extends('admin.layout.main')

@section('content')
@include('admin.alert')

<form method="post" action="{{route('category.store')}}">
@csrf
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed">
    <button type="button" id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
    <ul class="navbar-nav ">
        <li class="nav-item"> <a class="nav-link line-1" href="{{route('category.index')}}" ><i class="fa fa-chevron-left" aria-hidden="true"></i> <span class="mobile-hide">Quay lại</span> </a> </li>
    </ul>
    <ul class="navbar-nav ml-auto">
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
    <h2 class="h3 mb-0 text-gray-800 line-1 size-1-3-rem">Thêm mới</h2>
</div>

<div class="row">
    <div class="col-xl-9 col-lg-9">
        <div class="card shadow mb-2">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ul class="nav nav-pills">
                    <li><a data-toggle="tab" class="nav-link active" href="#vi">Nội dung</a></li>
                    
                </ul>
            </div>
            <div class="tab-content overflow">
                <div class="tab-pane active" id="vi">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Name</label>
                                  <input name="name" placeholder="Tên danh mục" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label>Content</label>
                                  <textarea name="content" class="form-control" id="ckeditor"></textarea>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label>Title</label>
                                  <input name="title" placeholder="Tiêu đề SEO" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label>Description</label>
                                  <input name="description" placeholder="Mô tả SEO" type="text" class="form-control">
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Images</h6>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="">Sort By</label>
                          <select name='sort_by' class="form-control select2" id="sort_by">
                              <option value="Product">Product</option>
                              <option value="News">News</option>
                              <option value="Page">Page</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="">Root</label>
                          <select id="parent" name='parent' class="form-control select2">
                            <option value="0">--Root--</option>
                            <?php addeditcat ($category,0,$str='',old('parent')); ?>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label>View</label>
                          <input name="view" placeholder="View" type="text" class="form-control">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Icon</label>
                          <input name="icon" placeholder="Icon" type="text" class="form-control">
                      </div>
                  </div>
              </div>
            </div>

        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Images</h6>
            </div>
            <div class="card-body">
                <div class="file-upload">
                    <div class="file-upload-content" onclick="$('.file-upload-input').trigger( 'click' )">
                        <img class="file-upload-image" src="data/no_image.jpg" />
                    </div>
                    <div class="image-upload-wrap">
                        <input name="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
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
@endsection