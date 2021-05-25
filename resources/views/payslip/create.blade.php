@php $active = 'payslips' @endphp
@extends('layout.main')
@section('title', 'Payslip')
@section('title', $active)
@section('content')
    <div style="margin-top: -1%;" class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row">
                    <h3>Payroll</h3>
                    <hr>
                    <div class="col-10"></div>
                    {{-- <div class="col-2 text-end"> 
                  <button class="btn btn-primary pull-right">Create</button>
              </div> --}}
                    <div class="col-12">
                        <br>
                    </div>
                    {{-- <div class="col-8"></div>
              <div class="col-4 text-end"> 
                  <input type="text" class="form-control" placeholder="Search">
              </div> --}}
                    <div class="col-12">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Cut-off start</label>
                                <input type="date" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Cut-off end</label>
                                <input type="date" class="form-control" id="inputPassword4">
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
