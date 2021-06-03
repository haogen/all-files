@php $active = 'payslips' @endphp
@extends('components.layout.main')
@section('title', 'Payslips')
@section('body')
<div class="row align-items-center"> 
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body row p-5"> 

                                <div class="col-10">
                                    <h4>
                                        List of Payslips 
                                    </h4>
                                </div>
                                <div class="col-2 text-end"> 
                                    <a href="/payslips/create" class="btn btn-dark pull-right">Create</a>
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
                                                <th class="text-muted" scope="col">#</th>
                                                <th class="text-muted" scope="col">Processed</th>
                                                <th class="text-muted" scope="col">Cut off Start</th>
                                                <th class="text-muted" scope="col">Cut off End</th>
                                                <th class="text-muted" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>3 months ago</td>
                                                <td>Feb 12, 2021</td>
                                                <td>Feb 13, 2021</td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>3 months ago</td>
                                                <td>Feb 12, 2021</td>
                                                <td>Feb 13, 2021</td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>3 months ago</td>
                                                <td>Feb 12, 2021</td>
                                                <td>Feb 13, 2021</td>
                                                <td></td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
@endsection