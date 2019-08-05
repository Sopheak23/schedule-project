@extends('layouts.app')

@section('content')

<h2 style="display: inline-block">List of Classes:</h2>
<a href="{{ route('ClassesCreate')}} " class="btn btn-primary" style="float: right; margin-top: 20px;" >Make New Class</a>
<table class="table table-striped">
        <thead>
            <tr>
                <td>No</td>
                <td>Subject</td>
                <td>Total Student</td>
                <td>Start Time</td>
              <td colspan="2">Actions</td>
              </div>
            </tr>
        </thead>
        <tbody>
            @foreach($classes as $class)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$class->subject->subject_name}}</td>
                <td>{{$class->total_students}}</td>
                 <td>{{$class->start_time}}</td>
                <td><a href="{{ route('EditClassesCreate',$class->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('DeleteClassesCreate', $class->id)}}" method="post">
                      @csrf
                  <button class="btn btn-danger" type="submit" onclick="return confirm('Do you really want to delete Subject {{$class->subject->subject_name}} ?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>


@endsection
