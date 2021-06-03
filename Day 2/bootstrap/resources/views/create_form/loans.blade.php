@php $active = 'loans' @endphp
@extends('components.layout.main')
@section('title', 'Create Loans')
@section('body')
    <div class="row align-items-center">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5">

                    <div class="col-10">
                        <h4>
                            Create Loans
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
                                <label for="inputLoanType" class="form-label">Loan Type</label>
                                <select id="inputLoanTyp" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Loan Type 1</option>
                                    <option>Loan Type 1</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="inputLAmount" class="form-label">Loan Amount</label>
                                <input type="number" class="form-control" id="inputLAmount">
                            </div>
                            <div class="col-md-12">
                                <label for="inputMonthsPay" class="form-label">Months Payable</label>
                                <input type="number" class="form-control" id="inputMonthsPay">
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
                            <button type="submit" class="btn btn-primary">Apply</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection