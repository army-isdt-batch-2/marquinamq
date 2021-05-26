@php $active = 'department' @endphp
@extends('layout.main')
@section('title', 'Department')
@section('title', $active)
@section('content')
    <div style="margin-top: -1%;" class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row">
                    <h3>Create Department</h3>
                    <hr>
                    <div class="col-10"></div>
                    <div class="col-12">
                        <br>
                    </div>
                    <div class="col-12">
                        <form action="/departments/save" method="post" class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Department</label>
                                <input type="text" class="form-control" id="inputEmail4" name="departments" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
