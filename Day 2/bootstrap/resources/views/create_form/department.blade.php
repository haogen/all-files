@php $active = 'department' @endphp
@extends('components.layout.main')
@section('title', 'Create Department')
@section('body')
    <div class="row align-items-center">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5">

                    <div class="col-10">
                        <h4>
                            Create Department
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
                                <label for="inputDepartment" class="form-label">Add Department</label>
                                <input type="text" class="form-control" id="inputDepartment" placeholder="Input Department">
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