@extends('dashboard.layouts.admin-layout') @section('content')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Products List</h4>
                    <div class="add-product">
                    <a href="{{ route('products-add') }}">Add Product</a>
                    </div>
                    <table>
                        <tr>
                            <th width="300">Image</th>
                            <th>Product Title</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Setting</th>
                        </tr>
                        @foreach ($products as $prod)
                        <tr>
                            <td><img src="{{ asset('products-assets/'. $prod->image ) }}" alt="" style="width:250px" /></td>
                            <td>{{ $prod->name }}</td>
                            <td>
                                @if ($prod->status == 'stock')
                                    <button class="ps-setting">In Stock</button>
                                @else
                                    <button class="ds-setting">Out Of Stock</button>
                                @endif
                            </td>
                            <td>Rp. {{ $prod->price }}</td>
                            <td>

                                <a href="{{ url('products/'. $prod->id) }}">
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{-- <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection