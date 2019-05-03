@extends('layout')

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
    {{$faculties->Faculty_Name}}
  </div>
  <div class="card-body">
    <a href="{{ route('departments.create')}}" class="btn btn-primary">Add Department</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Department Name</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($departments as $department)
        <tr>
            <td>{{$department->id}}</td>
            <td>{{$department->Department_Name}}</td>
            <td><a href="{{ route('departments.edit',$department->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('departments.destroy', $department->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
