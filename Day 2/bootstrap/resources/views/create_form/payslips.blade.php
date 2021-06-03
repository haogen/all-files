@php $active = 'payslip' @endphp
@extends('components.layout.main')
@section('title', 'Create Payslips')
@section('body')
<div class="row align-items-center">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5">

                    <div class="col-10">
                        <h4>
                            Process Payroll
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
                                <label for="inputAttendanceDate" class="form-label">Cut-off start</label>
                                <input type="date" class="form-control" id="inputAttendanceDate">
                            </div>
                            <div class="col-md-6">
                                <label for="inputAttendanceDate" class="form-label">Cut-off end</label>
                                <input type="date" class="form-control" id="inputAttendanceDate">
                            </div>
                            <div class="col-12">
                                <hr>
                                <button type="submit" class="btn btn-primary">Process</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection