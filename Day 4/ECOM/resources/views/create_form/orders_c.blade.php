@php $active = 'orders' @endphp
@extends('layouts.main')
@section('title', 'Create Orders')
@section('body')
    <div class="row align-items-center">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5">

                    <div class="col-10">
                        <h4>
                            Create Orders
                        </h4>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end">
                    </div>

                    <div class="col-12">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Customer Name</label>
                                <input type="text" class="form-control" id="inputProducts">
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Contact Number</label>
                                <input type="tel" class="form-control" id="inputProducts">
                            </div>
                            <div class="col-md-12">
                                <label for="inputName" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputProducts">
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Product</label>
                                <input type="text" class="form-control" id="inputProducts">
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="inputProducts">
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Total</label>
                                <input type="number" class="form-control" id="inputProducts">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCate" class="form-label">Shipment Status</label>
                                <select id="inputCate" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>For Delivery</option>
                                    <option>Shipment</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <hr>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection