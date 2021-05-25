@php $active = 'deductions' @endphp
@extends('layout.main')
@section('title', 'Deduction')
@section('title', $active)
@section('content')
  <div style="margin-top: -1%;" class="row">
    <div class="col-12 mt-5">
      <div class="card">
          <div class="card-body row"> 
              <h3>Create Deduction</h3>
              <hr>
              <div class="col-10"></div>
              {{-- <div class="col-2 text-end"> 
                  <button class="btn btn-primary pull-right">Create</button>
              </div>  --}}
              <div class="col-12">
                    <br>
              </div>
              {{-- <div class="col-8"></div>
              <div class="col-4 text-end"> 
                  <input type="text" class="form-control" placeholder="Search">
              </div>  --}}
              <div class="col-12">
                <form class="row g-3">
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">Contribution type</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>Tax</option>
                      <option>SSS</option>
                    </select>
                  </div>
                    <div class="col-md-8">
                      <label for="inputEmail4" class="form-label">Base Range</label>
                      <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-4">
                      <label for="inputPassword4" class="form-label">Monthly Contribution</label>
                      <input type="text" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-4">
                      <label for="inputAddress" class="form-label">
                        Employee Share</label>
                      <input type="text" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-4">
                      <label for="inputAddress2" class="form-label">Employer Share</label>
                      <input type="text" class="form-control" id="inputAddress2">
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