@php $active = 'leaves' @endphp
@extends('components.layout.main')
@section('title', 'Leaves')
@section('body')
<div class="row align-items-center"> 
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body row p-5"> 

                                <div class="col-10">
                                    <h4>
                                        List of Leaves 
                                    </h4>
                                </div>
                                <div class="col-2 text-end"> 
                                    <a href="/leaves/create" class="btn btn-dark pull-right">Create</a>
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
                                                <th class="text-muted" scope="col">Leave Type</th>
                                                <th class="text-muted" scope="col">Start</th>
                                                <th class="text-muted" scope="col">End</th>
                                                <th class="text-muted" scope="col">Status</th>
                                                <th class="text-muted" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>1</td>
                                                <td>Paternity</td>
                                                <td>Apr 21, 2021</td>
                                                <td>Apr 13, 2021</td>
                                                <td>Expired</td>
                                                <td>Actions</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row"></th>
                                                <td>2</td>
                                                <td>Paternity</td>
                                                <td>Apr 21, 2021</td>
                                                <td>Apr 13, 2021</td>
                                                <td>Expired</td>
                                                <td>Actions</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row"></th>
                                                <td>2</td>
                                                <td>Paternity</td>
                                                <td>Apr 21, 2021</td>
                                                <td>Apr 13, 2021</td>
                                                <td>Expired</td>
                                                <td>Actions</td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
@endsection