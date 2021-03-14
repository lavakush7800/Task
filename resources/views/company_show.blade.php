@extends('layouts.app')
@section('title','company_show')
@section('content')
<?php
  // dd($results);
?>
<div class="container">
 <center> <h2>Campany Table</h2></center>   
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>LOGO</th>
        <th>COMPANY NAME</th>
        <th>UPDATE</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
    @foreach($results as $data)
      <tr>
        <td>{{ $data['id'] }}</td>
        <td><img src='<?php echo "/storage/".str_replace('public/','',$data['image']); ?>' width="80" /></td>
        <td>{{ $data['company_name'] }}</td>
        <td>
        <form  action="company/edit/{{ $data['id'] }}">
        @csrf
        <button class="btn btn-primary btn-sm">Edit</button>
        </form>
        </td>
        <td>
        <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="company/delete/{{ $data['id'] }}"><i class="fa fa-trash">Delete</i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
    <td></td>
    <td>
        <a href="/company">
        <button class="btn btn-primary btn-md ">Add Company</button>
        </a>
        </td>
  </table>
</div>
@endsection