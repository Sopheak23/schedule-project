@extends('layout')

@section('content')

<h2>Professor Form</h2>

<form method="post" action="{{ route('StoreClassesCreate') }}">
        <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Teacher Name:</label>
                <input class="form-control" name="teacher_name" aria-label="Small" aria-describedby="inputGroup-sizing-sm" />
        </div>
        <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Student Number:</label>
                <input class="form-control" name="total_students" aria-label="Small" aria-describedby="inputGroup-sizing-sm" />
        </div>
        <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Department:</label>
                <select class="form-control" name="prof_dept_id" >
                    <option value="NULL" selected>Choose Department...</option>
                    @foreach ($prof_depts as $prof_depts)
                        <option name="dep" value={{$prof_depts->department->id}}>{{$prof_depts->department->department_name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Subject:</label>
                <select class="form-control"  name="subject_id" >
                    <option value="NULL"selected>Choose Subjects...</option>
                    @foreach ($subjects as $subject)
                        <option value={{$subject->id}}>{{$subject->subject_name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Days:</label>
                <select class="form-control" name="day_id" >
                    <option value="NULL" selected>Choose Days...</option>
                    @foreach ($days as $day)
                        <option value={{$day->id}}>{{$day->day}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            @csrf
            <label for="formGroupExampleInput">Start Time:</label>
            <select class="form-control" name="start_time" >
                <option value="NULL" selected>Choose Times...</option>
                @foreach ($times as $time)
                    <option value={{$time->id}}>{{$time->time}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            @csrf
            <label for="formGroupExampleInput">End Time:</label>
            <select class="form-control"name="end_time" >
                <option value="NULL" selected>Choose Times...</option>
                @foreach ($times as $time)
                    <option value={{$time->id}}>{{$time->time}}</option>
                @endforeach
            </select>
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

{{-- <div style="padding: 20px 20px 20px 10px; border: 1px solid #6200">
    <form method="post" action="{{ route('StoreClassCreate') }}">
        @csrf
        <div class="form-group">
            @csrf
            <label for="formGroupExampleInput">Teacher Name:</label>
            <input class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" />
        </div>
        <div class="form-group">
            @csrf
                <label for="formGroupExampleInput">Department:</label>
                <select class="form-control">
                    <option value="NULL" name="	prof_dept_id" selected>Choose Department...</option>
                    @foreach ($departments as $department)
                        <option name="dep" value={{$department->id}}>{{$department->department_name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            @csrf
                <label for="formGroupExampleInput">Subject:</label>
                <select class="form-control">
                    <option value="NULL" name="subject_id" selected>Choose Subjects...</option>
                    @foreach ($subjects as $subject)
                        <option value={{$subject->id}}>{{$subject->subject_name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            @csrf
                <label for="formGroupExampleInput">Days:</label>
                <select class="form-control">
                    <option value="NULL" name="day_id" selected>Choose Days...</option>
                    @foreach ($days as $day)
                        <option value={{$day->id}}>{{$day->day}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            @csrf
                <label for="formGroupExampleInput">Start Time:</label>
                <select class="form-control">
                    <option value="NULL" name="start_time" selected>Choose Times...</option>
                    @foreach ($times as $time)
                        <option value={{$time->id}}>{{$time->time}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            @csrf
                <label for="formGroupExampleInput">End Time:</label>
                <select class="form-control">
                    <option value="NULL" name="end_time" selected>Choose Times...</option>
                    @foreach ($times as $time)
                        <option value={{$time->id}}>{{$time->time}}</option>
                    @endforeach
                </select>
        </div>
        <button type="button" class="btn btn-primary btn-lg">Submit</button>
    </form>
</div> --}}

@endsection
