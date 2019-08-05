@extends('layouts.app')

@section('content')
<h3>Subject List:</h3>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success" style="margin-bottom: 0px;">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <div>
    <input type="text" name="search" placeholder="Search subject" style="border-radius: 5px; width: 300px;">
    <a href="{{ route('subjects.create')}} " class="btn btn-primary" style="float: right">Add Subject</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>No</td>
          <td>Subject Name</td>
          <td colspan="2">Actions</td>
          </div>
        </tr>
    </thead>
    <tbody>
        @foreach($subjects as $subject)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$subject->subject_name}}</td>
            <td><a href="{{ route('subjects.edit',$subject->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('subjects.destroy', $subject->id)}}" method="post">
                  @csrf
                  @method('DELETE')
              <button class="btn btn-danger" type="submit" onclick="return confirm('Do you really want to delete Subject {{$subject->subject_name}}?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
