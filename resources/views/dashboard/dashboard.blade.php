@extends('dashboard.layouts.admin-layout')

@section('content')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Transaction List</h4>
                    <div class="add-product">
                        <a href="{{ url('transaction/add') }}">Add Transaction</a>
                    </div>
                    <table>
                        <tr>
                            <th>ID Transaction</th>
                            <th>Customers</th>
                            <th>Subtotal</th>
                            <th>Status</th>

                        @foreach ($transactions as $transaction)
                        <tr>
                            <td>#{{ $transaction->id }}</td>
                            <td>{{ $transaction->customers }}</td>
                            <td>{{ $transaction->subtotal }}</td>
                            <td>
                                <button class="pd-setting">PAID</button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
