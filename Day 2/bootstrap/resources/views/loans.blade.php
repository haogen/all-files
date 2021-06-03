@php $active = 'loans' @endphp
@extends('components.layout.main')
@section('title', 'Loans')
@section('body')
<div class="row align-items-center"> 
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body row p-5"> 

                                <div class="col-10">
                                    <h4>
                                        List of Loans 
                                    </h4>
                                </div>
                                <div class="col-2 text-end"> 
                                    <a href="/loans/create" class="btn btn-dark pull-right">Create</a>
                                </div> 
                                <div class="col-12">
                                    <hr>    
                                </div>

                                <div class="col-8"></div>
                                <div class="col-4 text-end"> 
                                    <input type="text" class="form-control" placeholder="Search">
                                </div> 

                                <div class="col-12">
                                    <table class="table mt-3">
                                        <thead>
                                            <tr>
                                                <th class="text-muted" scope="col">Picture</th>
                                                <th class="text-muted" scope="col">Employee ID</th>
                                                <th class="text-muted" scope="col">Loan Type</th>
                                                <th class="text-muted" scope="col">Amount</th>
                                                <th class="text-muted" scope="col">Months Payable</th>
                                                <th class="text-muted" scope="col">Total</th>
                                                <th class="text-muted" scope="col">Balance</th>
                                                <th class="text-muted" scope="col">Status</th>
                                                <th class="text-muted" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>1</td>
                                                <td>Car Loan</td>
                                                <td>P 10,000.00</td>
                                                <td>6 months</td>
                                                <td>P 10,700.00</td>
                                                <td>P 10,700.00</td>
                                                <td>Unpaid</td>
                                                <td>Action</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row"></th>
                                                <td>2</td>
                                                <td>Car Loan</td>
                                                <td>P 10,000.00</td>
                                                <td>6 months</td>
                                                <td>P 10,700.00</td>
                                                <td>P 10,700.00</td>
                                                <td>Unpaid</td>
                                                <td>Action</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row"></th>
                                                <td>3</td>
                                                <td>Car Loan</td>
                                                <td>P 10,000.00</td>
                                                <td>6 months</td>
                                                <td>P 10,700.00</td>
                                                <td>P 10,700.00</td>
                                                <td>Unpaid</td>
                                                <td>Action</td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
@endsection