@extends('layouts.app')
@section('title','Home')
@section('content')
<?php
//  dd($employee_data);
?>
<div class="container">
 
    <center><h3>Employee Edit</h3></center>
  <form method="post" action="/user/update">
  <div class="form-group">
      <label for="company_id">Company Name:</label>
      <select class="form-control" name="company_id">
        <option value="">Select Company</option>
      </select>
    </div>

    <div class="row">
    <div class="col">
    <label for="name">Fist Name:</label>
      <input type="text" class="form-control" placeholder="First name"  name="first_name" value="{{ $employee_data['first_name'] }}">
    </div>
    <div class="col">
    <label for="name">Last Name:</label>
      <input type="text" class="form-control" placeholder="Last name"  name="last_name" value="{{ $employee_data['last_name'] }}">
    </div>
  </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="{{ $employee_data['email'] }}" name="email">
    </div>
    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="text" class="form-control" id="mobile" value="{{ $employee_data['mobile'] }}" name="mobile">
    </div>
    <div class="form-group">
      <label for="amount">salary:</label>
      <input type="text" class="form-control" id="amount" value="{{ $employee_data['amount'] }}" name="amount">
    </div>
<div class="form-group">
      <label for="designation">Designation:</label>
      <select class="form-control" name="designation" value="{{ $employee_data['amount'] }}">
      <option>Select Options</option><br>
      <option name="designation" value="HR">HR</option><br>
      <option name="designation" value="developer">Developer</option><br>
      <option name="designation" value="Mobile developer">Mobile Developer</option><br>
    </div>    
    <input type="hidden"   value="{{ $employee_data['id'] }}" name="id"> 
    @csrf
    <input type="submit" value="submit" style="margin-top: 30px;" name="submit" class="btn btn-secondary btn-md"/>
  </form>
  
</div>
@endsection