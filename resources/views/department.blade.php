@php $active = 'department' @endphp
@extends('layout.main')
@section('title', 'Department')
@section('title', $active)
@section('content')
    <div style="margin-top: -1%;" class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row">
                    <h3>List of Departments</h3>
                    <hr>
                    <div class="col-10"></div>
                    <div class="col-2 text-end">
                        <a href="/departments/create" class="btn btn-dark pull-right">Create</a>
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
                                    <th scope="col">#</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Updated</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $dep)
                                    <tr>
                                        <th scope="row">{{ $dep->id }}</th>
                                        <td>{{ $dep->departments }}</td>
                                        <td>{{ $dep->created_at }}</td>
                                        <td>{{ $dep->updated_at }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="#">Update</a></li>
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
