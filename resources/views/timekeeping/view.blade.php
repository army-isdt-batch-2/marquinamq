@php $active = 'timekeeping' @endphp
@extends('layout.main')
@section('title', 'View Timekeeping')
@section('title', $active)
@section('content')
  <div style="margin-top: -1%;" class="row">
    <div class="col-12 mt-5">
      <div class="card">
          <div class="card-body row"> 
              <h3>List of Timekeeping</h3>
              <hr>
              
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
                            <th class="text-muted" scope="col"></th>
                            <th class="text-muted" scope="col">Reg In</th>
                            <th class="text-muted" scope="col">Reg Out</th>
                            <th class="text-muted" scope="col">Reg Hr</th>
                            <th class="text-muted" scope="col">OT Hr</th>
                            <th class="text-muted" scope="col">Night Diff Hr</th>
                            <th class="text-muted" scope="col">Early Hr</th>
                            <th class="text-muted" scope="col">Tardy Hr</th>
                            <th class="text-muted" scope="col">Double Pay</th>
                            <th class="text-muted" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <img width="50px" src="https://xsodia.space/payroll/assets/16281099.jpg" alt="">
                                <br>
                                <small>Kenneth Abenojar</small>
                            </th>
                            <td>
                                <input type="time" class="form-control">
                            </td>
                            <td>
                                <input type="time" class="form-control">
                            </td>
                            <td>0hrs</td>
                            <td>0hrs</td>
                            <td>0hrs</td>
                            <td>0hrs</td>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>
                                <button class="btn btn-sm btn-dark">Save</button>
                            </td>
                        </tr>  
                    </tbody>
                </table>
            </div>
          </div>
      </div>
  </div> 
  @endsection  