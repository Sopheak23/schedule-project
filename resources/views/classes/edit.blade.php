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
                <option  value="{{$classes->prof_dept_id}}" selected>{{$departments[$classes->prof_dept_id-1]->department_name}}</option>
                    @foreach ($departments as $department)
                        <option name="dep" value={{$department->id}}>{{$department->department_name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Subject:</label>
                <select class="form-control" name="subject_id" >
                    <option value="{{$classes->subject_id}}" selected>{{$subjects[$classes->subject_id-1]->subject_name}}</option>
                    @foreach ($subjects as $subject)
                        <option value={{$subject->id}}>{{$subject->subject_name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
                @csrf 
                <label for="formGroupExampleInput">Days:</label>
                <select class="form-control" name="day_id" >
                    <option value="{{$classes->day_id}}" selected>{{$days[$classes->day_id-1]->day}}</option>
                    @foreach ($days as $day)
                        <option value={{$day->id}}>{{$day->day}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            @csrf
            <label for="formGroupExampleInput">Start Time:</label>
            <select class="form-control" name="start_time" >
                <option value="{{$classes->start_time}}" selected>{{$times[$classes->start_time-1]->time}}</option>
                @foreach ($times as $time)
                    <option value={{$time->id}}>{{$time->time}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            @csrf
            <label for="formGroupExampleInput">End Time:</label>
            <select class="form-control"name="end_time" >
                <option value="{{$classes->end_time}}" selected>{{$times[$classes->end_time-1]->time}}</option>
                @foreach ($times as $time)
                    <option value={{$time->id}}>{{$time->time}}</option>
                @endforeach
            </select>
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
