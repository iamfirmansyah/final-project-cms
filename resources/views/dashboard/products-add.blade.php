@extends('dashboard.layouts.admin-layout')

@section('content')
<form method="post" action="{{ route('products-store') }}" enctype="multipart/form-data">
@csrf
    <div class="single-product-tab-area mg-b-30">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product Edit</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                    <input type="text" name="name" class="form-control" placeholder="Product Title" required>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                    <input type="number" class="form-control" placeholder="Price" name="price" required>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                    <input type="file" accept="image/*" id="imgInp" class="form-control" placeholder="Image" name="image" required>
                                                    <input type="text" hidden name="old_image">
                                                </div>
                                                <select name="status" class="form-control pro-edt-select form-control-primary" required>
                                                    <option value="opt1">Select Status</option>
                                                    <option value="stock">In Stock</option>
                                                    <option value="out_stock">Out Of Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <img id="blah" src="#" alt="" width="400"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mg-t-30">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                                <input type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" value="Update">
                                                <a href="{{ url('products') }}" class="btn btn-ctl-bt waves-effect waves-light">Back</a>
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
</form>
<script>
    imgInp.onchange = evt => {
    const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>

@endsection
