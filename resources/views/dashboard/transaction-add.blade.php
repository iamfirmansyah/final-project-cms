@extends('dashboard.layouts.admin-layout')

@section('content')

<div class="single-product-tab-area mg-b-30">
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Products List</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row text-center">

                                                @foreach ($products as $pd)
                                                <div class="col-lg-2 col-md-4 col-sm-8 col-xs-12" style="padding:1%">
                                                    <a href="#" id="makanan" onclick="getValue({{ $pd->id }})">
                                                        <div class="">
                                                            <img id="blah" src="{{ asset('products-assets/'. $pd->image) }}" alt="" width="300"/>
                                                        </div>
                                                        <div style="padding-top:5%">
                                                            <h4 id="myText{{ $pd->id }}">{{ $pd->name }}</h4>
                                                            <p id="harga{{ $pd->id }}">Rp. {{ $pd->price }}</p>
                                                            <p id="image{{ $pd->id }}" hidden>{{ $pd->image }}</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach

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
<form method="post" action="{{ route('transaction-store') }}" enctype="multipart/form-data">
@csrf
<div class="single-product-tab-area mg-b-30">
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i>Add Transaction</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="customers" placeholder="Customer Name" required>
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                <input type="number" class="form-control" name="subtotal" placeholder="Subtotal" required id="subtotal" readonly style="background-color: #152036" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row" id="isi">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mg-t-30">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center custom-pro-edt-ds">
                                            <input type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" value="Insert">
                                            <a href="{{ url('/') }}" class="btn btn-ctl-bt waves-effect waves-light">Back</a>
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
    function getValue(i) {
        var makanan = $('#myText' + i).text(); // get nama maknan berdasarkan id_menu
        var harga = $('#harga' + i).text(); // get harganya
        var ambil_harga = harga.replace("Rp. ", ""); // split harga berdasarkan spasi RP 1000
        var ambil_image = $('#image' + i).text(); // get harganya


        // alert('ini harga: '+ ambil_harga);
        // alert('ini image: ' + ambil_image);

        var makan_terpilih = $('#makanan' + i).val(); //
        var jml = $('#jumlah' + i).text();

        jumlah = 1;

        console.log(makan_terpilih)
        console.log(makanan)
        console.log("jumlah: " + jml);
        console.log("----");

        if (makan_terpilih === makanan) {
            var total_makanan = $('#jumlah' + i).html(parseInt(jml) + jumlah);

        } else if (makan_terpilih != makanan) {
            $(
                '<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="padding:1%">' +
                '<div class="input-group mg-b-pro-edt"><input type="text" readonly style="background-color: #152036"' +
                'value="' + makanan + '" id="makanan' + i + '" class="form-control" ' +
                'placeholder="Recipients username" aria-label="Recipients username" aria-descri' +
                'bedby="basic-addon2"><input type="text" hidden style="background-color:#fff;" ' +
                'value="' + i + '" name="products[]" id="makanan' + i + '"><div class="input-gro' +
                'up-append"><span class="input-group-text" style="color:white" id="basic-addon2">Ordered Quantity&nbs' +
                'p;&nbsp;<b id="jumlah' + i + '">1</b></span></div></div><br>' +
                '</div>'
            ).insertAfter($("#isi"));
        }

        var subtotal = 1 + parseInt(jml);
        if (isNaN(subtotal)) {
            subtotal = 1;
        }
        total = ambil_harga;

        counting(total);
    }

    function counting(total) {
        var subtotal = $('#subtotal').val();
        total = Number(subtotal) + Number(total);
        $('#subtotal').val(total);
    }
</script>

@endsection
