@extends('layouts.app')
@section('title','Employee')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <div class="card">
    <div class="container">
    <h2 style="text-align:center">Employee Registration</h2>

    <form method="post" action="/empsave">
    <div class="form-group">
      <label for="company_id">Company Name:</label>
      <select class="form-control" name="company_id">
        <option value="">Select Company</option>
        @foreach($results as $category)
       <option value="{{ $category['id'] }}">{{ $category['company_name'] }}</option>
       @endforeach
      </select>
      @error('company_id')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>

    <div class="row">
    <div class="col">
    <label for="name">Fist Name:</label>
      <input type="text" class="form-control" placeholder="First name"  name="first_name">
      @error('first_name')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
    <div class="col">
    <label for="name">Last Name:</label>
      <input type="text" class="form-control" placeholder="Last name"  name="last_name">
      @error('last_name')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="" name="email">
    @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label for="mobile">Mobile:</label>
    <input type="text" class="form-control" id="mobile" placeholder="" name="mobile">
    @error('mobile')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label for="amount">Salary:</label>
    <input type="text" class="form-control" id="amount" placeholder="" name="amount">
    @error('amount')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label for="designation">Designation:</label>
    <select class="form-control" name="designation">
    <option>Select Options</option><br>
    <option name="designation" value="HR">HR</option><br>
    <option name="designation" value="developer">Developer</option><br>
    <option name="designation" value="Mobile developer">Mobile Developer</option><br>
    @error('designation')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
  </div>
    @csrf
    <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Submit</button>
  </form>
</div>
  </div>
    </div>
    <div class="col-sm-3" > </div>
  </div>
</div>

@endsection

 