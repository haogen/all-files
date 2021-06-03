@php $active = 'employees' @endphp
@extends('components.layout.main')
@section('title', 'Create Employees')
@section('body')
    <div class="row align-items-center">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5">

                    <div class="col-10">
                        <h4>
                            Add Employees
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
                                <label for="inputPhoto" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="inputPhoto">
                            </div>
                            <div class="col-md-4">
                                <label for="inputFirstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="inputFirstName">
                            </div>
                            <div class="col-md-4">
                                <label for="inputLastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="inputLastName">
                            </div>
                            <div class="col-md-4">
                                <label for="inputMiddleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="inputMiddleName">
                            </div>
                            <div class="col-md-4">
                                <label for="inputContact" class="form-label">Contact</label>
                                <input type="tel" class="form-control" id="inputContact">
                            </div>
                            <div class="col-md-4">
                                <label for="inputBirthday" class="form-label">Birthday</label>
                                <input type="date" class="form-control" id="inputBirthday">
                            </div>
                            <div class="col-md-4">
                                <label for="inputGender" class="form-label">Gender</label>
                                <select id="inputGender" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-md-4">
                                <label for="inputDepartment" class="form-label">Department</label>
                                <select id="inputDepartment" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Information Technology</option>
                                    <option>Computer Science</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="inputDesignation" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="inputDesignation">
                            </div>
                            <div class="col-md-4">
                                <label for="inputBasicRate" class="form-label">Basic Rate Per Day</label>
                                <input type="number" class="form-control" id="inputBasicRate">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPhil" class="form-label">PhilHealth Contribution Table</label>
                                <select id="inputPhil" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>P10,000.00 below</option>
                                    <option>P10,000.00 up</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputSss" class="form-label">SSS Contribution Table</label>
                                <select id="inputSss" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>P8,999.00 below</option>
                                    <option>P8,999.00 up</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPhil" class="form-label">PAGIBIG Contribution Table</label>
                                <select id="inputPhil" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>P8,999.00 below</option>
                                    <option>P8,999.00 up</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputSss" class="form-label">Income Tax Table</label>
                                <select id="inputSss" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>P8,999.00 below</option>
                                    <option>P8,999.00 up</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection