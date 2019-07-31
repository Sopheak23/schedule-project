@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <div class="card-header">
  Professor name: <strong>{{$professors->professor_name}}</strong>
  <br>
  List of Departments
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Department Name</td>
        </tr>
    </thead>
    <tbody>
      @foreach($prof_dept as $department)
        <tr>
            <td>{{$department->id}}</td>
            <td>{{$department->department_name}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
<div>
@endsection
