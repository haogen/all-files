@php $active = 'customers' @endphp
@extends('layouts.main')
@section('title', 'Create Customers')
@section('body')
    <div class="row align-items-center">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5">

                    <div class="col-10">
                        <h4>
                            Create Customers
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
                                <label for="inputName" class="form-label">Name</label>
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
                                <label for="inputCate" class="form-label">Gender</label>
                                <select id="inputCate" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Age</label>
                                <input type="number" class="form-control" id="inputProducts">
                            </div>

                            <div class="col-md-12">
                                <label for="inputName" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="inputProducts">
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