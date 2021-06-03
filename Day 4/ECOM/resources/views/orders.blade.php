@php $active = 'orders' @endphp
@extends('layouts.main')
@section('title', 'Orders')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        List of Orders
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="/orders/create" class="btn btn-dark pull-right">Create</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                    <input type="text" class="form-control" placeholder="Search">
                </div>

                <div class="col-12">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th class="text-muted" scope="col">Customer Name</th>
                                <th class="text-muted" scope="col">Contact</th>
                                <th class="text-muted" scope="col">Address</th>
                                <th class="text-muted" scope="col">Product</th>
                                <th class="text-muted" scope="col">Quantity</th>
                                <th class="text-muted" scope="col">Total</th>
                                <th class="text-muted" scope="col">Shipment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Felipe John Suson</th>
                                <td>8100</td>
                                <td>Metro Manila</td>
                                <td>SB19 Album</td>
                                <td>100</td>
                                <td>P150,000.00</td>
                                <td>For Delivery</td>
                            </tr>
                            <tr>
                                <th scope="row">Felipe John Suson</th>
                                <td>8100</td>
                                <td>Metro Manila</td>
                                <td>SB19 Album</td>
                                <td>100</td>
                                <td>P150,000.00</td>
                                <td>For Delivery</td>
                            </tr>
                            <tr>
                                <th scope="row">Felipe John Suson</th>
                                <td>8100</td>
                                <td>Metro Manila</td>
                                <td>SB19 Album</td>
                                <td>100</td>
                                <td>P150,000.00</td>
                                <td>For Delivery</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection