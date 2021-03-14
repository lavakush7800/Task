@extends('layouts.app')
@section('title','egistration_show')
@section('content')

<div class="container-fluid">
 <center> <h2>Employee Table</h2></center>   
  <table class="table bg-primary text-white">
    <thead class="text-light bg-dark">
      <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>MOBILE</th>
        <th>SALARY</th>
        <th>DESIGNATION</th>
        <th>COMPANY ID</th>
        <th>UPDATE</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
    @foreach($results as $data)
      <tr>
        <td>{{ $data['id'] }}</td>
        <td>{{ $data['first_name'] }}</td>
        <td>{{ $data['last_name'] }}</td>
        <td>{{ $data['email'] }}</td>
        <td>{{ $data['mobile'] }}</td>
        <td>{{ $data['amount'] }}</td>
        <td>{{ $data['designation'] }}</td>
        <td>{{ $data['company_id'] }}</td>
        <td>
        <form  action="user/edit/{{ $data['id'] }}">
        @csrf
        <button class="btn btn-danger btn-sm">Edit</button>
        </form>
        </td>
        <td>
        <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="user/delete/{{ $data['id'] }}"><i class="fa fa-trash">Delete</i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection