@php $active = 'leave' @endphp
@extends('layout.main')
@section('title', 'Leaves')
@section('title', $active)
@section('content')
  <div style="margin-top: -1%;" class="row">
    <div class="col-12 mt-5">
      <div class="card">
          <div class="card-body row"> 
              <h3>Create Leave</h3>
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
                      <label for="inputPassword4" class="form-label">Employee ID</label>
                      <input type="text" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-4">
                      <label for="inputAddress2" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="">
                    </div>
                    <div class="col-4">
                      <label for="inputAddress2" class="form-label">Designation</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="">
                    </div>
                    <div class="col-md-4">
                      <div class="col-md-12">
                      <label for="inputState" class="form-label">Leave Type</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>Maternity Leave</option>
                        <option>Sick Leave</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Start</label>
                      <input type="date" class="form-control" id="inputAddress2" placeholder="">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">End</label>
                      <input type="date" class="form-control" id="inputAddress2" placeholder="">
                    </div>
                    </div>
                    <div class="col-md-8">
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Notes</label>
                      <textarea  row="7" class="form-control"></textarea>
                    </div>
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