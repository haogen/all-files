@php $active = 'customers' @endphp
@extends('layouts.main')
@section('title', 'Customers')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        List of Customers
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="/customers/create" class="btn btn-dark pull-right">Create</a>
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
                                <th class="text-muted" scope="col">Name</th>
                                <th class="text-muted" scope="col">Contact</th>
                                <th class="text-muted" scope="col">Address</th>
                                <th class="text-muted" scope="col">Gender</th>
                                <th class="text-muted" scope="col">Age</th>
                                <th class="text-muted" scope="col">email adress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Felipe John Suson</th>
                                <td>8100</td>
                                <td>Metro Manila</td>
                                <td>Male</td>
                                <td>24 years old</td>
                                <td>felipe29@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row">Felipe John Suson</th>
                                <td>8100</td>
                                <td>Metro Manila</td>
                                <td>Male</td>
                                <td>24 years old</td>
                                <td>felipe29@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row">Felipe John Suson</th>
                                <td>8100</td>
                                <td>Metro Manila</td>
                                <td>Male</td>
                                <td>24 years old</td>
                                <td>felipe29@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection