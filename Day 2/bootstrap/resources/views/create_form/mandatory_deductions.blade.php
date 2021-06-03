@php $active = 'mandatory-deductions' @endphp
@extends('components.layout.main')
@section('title', 'Create Mandatory Deductions')
@section('body')
<div class="row align-items-center">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5">

                    <div class="col-10">
                        <h4>
                            Add Contribution Table
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
                            <div class="col-md-4">
                                <label for="inputContriType" class="form-label">Contribution Type</label>
                                <select id="inputContriTyp" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Contribution Type 1</option>
                                    <option>Contribution Type 2</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label for="inputBaseR" class="form-label">Base Range</label>
                                <input type="text" class="form-control" id="inputBaseR" placeholder="Input Base Range">
                            </div>
                            <div class="col-md-4">
                                <label for="inputBaseR" class="form-label">Monthly Contribution</label>
                                <input type="number" class="form-control" id="inputBaseR">
                            </div>
                            <div class="col-md-4">
                                <label for="inputBaseR" class="form-label">Employee Share</label>
                                <input type="number" class="form-control" id="inputBaseR">
                            </div>
                            <div class="col-md-4">
                                <label for="inputBaseR" class="form-label">Employer Share</label>
                                <input type="number" class="form-control" id="inputBaseR">
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