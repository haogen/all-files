@php $active = 'products' @endphp
@extends('layouts.main')
@section('title', 'Create Products')
@section('body')
    <div class="row align-items-center">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5">

                    <div class="col-10">
                        <h4>
                            Create Products
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
                                <label for="inputProducts" class="form-label">Name of Products</label>
                                <input type="text" class="form-control" id="inputProducts" placeholder="Input Products">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCate" class="form-label">Products Category</label>
                                <select id="inputCate" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Album</option>
                                    <option>Clothes</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPrice" class="form-label">Price</label>
                                <input type="number" class="form-control" id="inputPrice">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCate" class="form-label">Brands</label>
                                <select id="inputCate" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Philippines</option>
                                    <option>USA</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="inputDesc" class="form-label">Description</label>
                                <textarea rows="5" class="form-control"></textarea>
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