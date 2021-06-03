@php $active = 'leaves' @endphp
@extends('components.layout.main')
@section('title', 'Create Leaves')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Create Leaves
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
                            <label for="inputEmployeeID" class="form-label">Employee ID</label>
                            <input type="text" class="form-control" id="inputEmployeeID"
                                placeholder="Input Employee ID">
                        </div>
                        <div class="col-md-4">
                            <label for="inputFName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="inputFName" placeholder="Input Full Name">
                        </div>
                        <div class="col-md-4">
                            <label for="inputDesignation" class="form-label">Designation</label>
                            <input type="text" class="form-control" id="inputDesignation"
                                placeholder="Input Designation">
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <label for="inputLeaveType" class="form-label">Leave Type</label>
                                <select id="inputLeaveTyp" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Leave Type 1</option>
                                    <option>Leave Type 1</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="inputStart" class="form-label">Start</label>
                                <input type="date" class="form-control" id="inputStart">
                            </div>
                            <div class="col-md-12">
                                <label for="inputEnd" class="form-label">End</label>
                                <input type="date" class="form-control" id="inputEnd">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-12">
                                <label for="inputNotes" class="form-label">Notes</label>
                                <textarea rows="7" class="form-control"></textarea>
                            </div>
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