@extends('layouts.app')
@section('title','company')
@section('content')
<div class="container-fluid">
 
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <div class="card">
    <div class="container">
    <h2 style="text-align:center">Employee Details</h2>


  <form method="post" action="/save"  enctype="multipart/form-data">

  <div class="form-group">
      <label for="image">Logo:</label>
      <input type="file" class="form-control" id="image" placeholder="" name="image">
      @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>

    <div class="form-group">
      <label for="company_name">Company Name:</label>
      <input type="text" class="form-control" id="company_name" placeholder="" name="company_name">
      @error('company_name')
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

 