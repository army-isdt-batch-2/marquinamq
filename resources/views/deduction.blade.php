@php $active = 'deduction' @endphp
@extends('layout.main')
@section('title', 'Deductions')
@section('title', $active)
@section('content')
    <div style="margin-top: -1%;" class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row">
                    <h3>List of Deductions</h3>
                    <hr>
                    <div class="col-10"></div>
                    <div class="col-2 text-end">
                        <a href="/deductions/create" class="btn btn-dark pull-right">Create</a>
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
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
