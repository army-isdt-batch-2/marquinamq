@php $active = 'employee' @endphp
@extends('layout.main')
@section('title', 'Employees')
@section('title', $active)
@section('content')
    <div style="margin-top: -1%;" class="row d ">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row">
                    <h3>List of Employees</h3>
                    <hr>
                    <div class="col-10"></div>
                    <div class="col-2 text-end">
                        <a href="/employees/create" class="btn btn-dark pull-right">Create</a>
                    </div>
                    <div class="col-12">
                        <br>
                    </div>
                    <div class="col-8"></div>
                    <div class="col-4 text-end">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-12">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Employee ID</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Total Earnings</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $emp)
                                    <tr>
                                        <th scope="row">{{ $emp->id }}</th>
                                        <td>{{ $emp->photo }}</td>
                                        <td>{{ $emp->gender }}</td>
                                        <td>{{ $emp->departments_id }}</td>
                                        <td>{{ $emp->contact }}</td>
                                        <td>{{ $emp->rate }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="#">Update</a></li>
                                                    <li><a class="dropdown-item" href="#">Apply Loan</a></li>
                                                    <li><a class="dropdown-item" href="#">Apply Leave</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
