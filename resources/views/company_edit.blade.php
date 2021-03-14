@extends('layouts.app')
@section('title','Home')
@section('content')
<?php
//  dd($company_data);
?>
<div class="container">
 
    <center><h3>Company Name Edit</h3></center>
  <form method="post" action="/company/update"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="image">Logo:</label>
      <input type="file" class="form-control" id="image" value="{{ $company_data['image'] }}" name="image">
    </div>
    <div class="form-group">
      <label for="company_name">Company Name:</label>
      <input type="text" class="form-control" id="company_name" value="{{ $company_data['company_name'] }}" name="company_name">
    </div>
    <input type="hidden"   value="{{ $company_data['id'] }}" name="id"> 
    @csrf
    <input type="submit" value="Update" style="margin-top: 30px;" name="submit" class="btn btn-secondary btn-md"/>
  </form>
  
</div>
@endsection