@extends('layout')

@section('content')

<h2>Professor Form</h2>

<form method="post" action="{{ route('UpdateClassCreate',$classes->id) }}">
        <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Teacher Name:</label>
                <input class="form-control" name="teacher_name" aria-label="Small" aria-describedby="inputGroup-sizing-sm" />
        </div>
        <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Student Number:</label>
        <input class="form-control" value="{{$classes->total_students}}" name="total_students" aria-label="Small" aria-describedby="inputGroup-sizing-sm" />
        </div>
        <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Department:</label>
                <select class="form-control" name="prof_dept_id" >
                <option  value="{{$classes->prof_dept_id}}" selected>{{$classes->prof_dept->department->department_name}}</option>
                    @foreach ($departments as $department)
                        <option name="dep" value={{$department->id}}>{{$department->department_name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Subject:</label>
                <select class="form-control" name="subject_id" >
                    <option value="{{$classes->subject_id}}" selected>{{$classes->subject->subject_name}}</option>
                    @foreach ($subjects as $subject)
                        <option value={{$subject->id}}>{{$subject->subject_name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Days:</label>
                <select class="form-control" name="day_id" >
                    <option value="{{$classes->day}}" selected>{{$classes->day}}</option>
                    @foreach ($days as $day)
                        <option value={{$day->day}}>{{$day->day}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            @csrf
            <label for="formGroupExampleInput">Start Time:</label>
            <select class="form-control" name="start_time" >
                <option value="{{$classes->start_time}}" selected>{{$classes->start_time}}</option>
                @foreach ($times as $time)
                    <option value={{$time->time}}>{{$time->time}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            @csrf
            <label for="formGroupExampleInput">End Time:</label>
            <select class="form-control"name="end_time" >
                <option value="{{$classes->end_time}}" selected>{{$classes->end_time}}</option>
                @foreach ($times as $time)
                    <option value={{$time->time}}>{{$time->time}}</option>
                @endforeach
            </select>
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
