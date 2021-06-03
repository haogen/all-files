@php $active = 'categories' @endphp
@extends('layouts.main')
@section('title', 'Create Categories')
@section('body')
    <div class="row align-items-center">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5">

                    <div class="col-10">
                        <h4>
                            Create Categories
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
                            <div class="col-md-12">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputProducts">
                            </div>
                            <div class="col-md-12">
                                <label for="inputDesc" class="form-label">Description</label>
                                <textarea rows="7" class="form-control"></textarea>
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