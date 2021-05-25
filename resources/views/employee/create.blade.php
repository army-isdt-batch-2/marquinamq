@php $active = 'employee' @endphp
@extends('layout.main')
@section('title', 'Employees')
@section('title', $active)
@section('content')
  <div style="margin-top: -1%;" class="row">
    <div class="col-12 mt-5">
      <div class="card">
          <div class="card-body row"> 
              <h3>Create Employee</h3>
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
                    <div class="col-md-12">
                      <label for="inputEmail4" class="form-label">Photo</label>
                      <input type="file" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-4">
                      <label for="inputPassword4" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-4">
                      <label for="inputPassword4" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-4">
                      <label for="inputPassword4" class="form-label">Middle Name</label>
                      <input type="text" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-4">
                      <label for="inputAddress" class="form-label">Contact</label>
                      <input type="tel" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-4">
                      <label for="inputCity" class="form-label">Birthday</label>
                      <input type="date" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">Gender</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Address</label>
                      <textarea type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"></textarea>
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">Department</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>IT Department</option>
                        <option>Sales Department</option>
                        <option>Cleaner</option>
                        <option>Billing Department</option>
                        <option>Graphich Designer</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label for="inputZip" class="form-label">Designation</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-4">
                      <label for="inputZip" class="form-label">Basic Rate Per Day</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">PhilHealth Contribution Table</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>P 10,000.00-below</option>
                        <option>P 10,000.00-above</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">SSS Contribution Table</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>P 10,000.00-below</option>
                        <option>P 10,000.00-above</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">PAGIBIG Contribution Table</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>P 10,000.00-below</option>
                        <option>P 10,000.00-above</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Income Tax Table</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>P 10,000.00-below</option>
                        <option>P 10,000.00-above</option>
                      </select>
                    </div>
                    {{-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div> --}}
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div> 
  @endsection  