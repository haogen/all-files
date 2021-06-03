@php $active = 'products' @endphp
@extends('layouts.main')
@section('title', 'Products')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        List of All Products
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="/products/create" class="btn btn-dark pull-right">Create</a>
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
                                <th class="text-muted" scope="col">Name</th>
                                <th class="text-muted" scope="col">Category</th>
                                <th class="text-muted" scope="col">Price</th>
                                <th class="text-muted" scope="col">Brand</th>
                                <th class="text-muted" scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">SB19 Album</th>
                                <td>Album</td>
                                <td>P1,800.00</td>
                                <td>Music</td>
                                <td>Philippines</td>
                            </tr>
                            <tr>
                                <th scope="row">SB19 Album</th>
                                <td>Album</td>
                                <td>P1,800.00</td>
                                <td>Music</td>
                                <td>Philippines</td>
                            </tr>
                            <tr>
                                <th scope="row">SB19 Album</th>
                                <td>Album</td>
                                <td>P1,800.00</td>
                                <td>Music</td>
                                <td>Philippines</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection