@extends('layouts.app')

@section('content')

<br>
<h2>Professor Form:</h2>
<br>
    <form method="post" action="{{ route('StoreClassesCreate') }}">
        <div style="margin: 0 15px 0 15px;">
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
                            <option name="dep" value={{$prof_depts->id}}>{{$prof_depts->department->department_name}}</option>
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
                            <option value='Monday'>Monday</option>
                            <option value='Tuesday'>Tuesday</option>
                            <option value='Wednesday'>Wednesday</option>
                            <option value='Thursday'>Thursday</option>
                            <option value='Friday'>Friday</option>
                            <option value='Saturday'>Saturday</option>
                    </select>
            </div>
            <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">Start Time:</label>
                <select class="form-control" name="start_time" >
                    <option value="NULL" selected>Choose Times...</option>
                        <option value="07:00:00">07:00:00</option>
                        <option value="08:00:00">08:00:00</option>
                        <option value="09:00:00">09:00:00</option>
                        <option value="10:00:00">10:00:00</option>
                        <option value="11:00:00">11:00:00</option>
                        <option value="12:00:00">12:00:00</option>
                        <option value="13:00:00">13:00:00</option>
                        <option value="14:00:00">14:00:00</option>
                        <option value="15:00:00">15:00:00</option>
                        <option value="16:00:00">16:00:00</option>
                        <option value="17:00:00">17:00:00</option>
                        <option value="18:00:00">18:00:00</option>
                        <option value="19:00:00">19:00:00</option>
                        <option value="20:00:00">20:00:00</option>
                        <option value="21:00:00">21:00:00</option>
                        <option value="22:00:00">22:00:00</option>
                </select>
            </div>
            <div class="form-group">
                @csrf
                <label for="formGroupExampleInput">End Time:</label>
                <select class="form-control"name="end_time" >
                    <option value="NULL" selected>Choose Times...</option>
                        <option value="07:00:00">07:00:00</option>
                        <option value="08:00:00">08:00:00</option>
                        <option value="09:00:00">09:00:00</option>
                        <option value="10:00:00">10:00:00</option>
                        <option value="11:00:00">11:00:00</option>
                        <option value="12:00:00">12:00:00</option>
                        <option value="13:00:00">13:00:00</option>
                        <option value="14:00:00">14:00:00</option>
                        <option value="15:00:00">15:00:00</option>
                        <option value="16:00:00">16:00:00</option>
                        <option value="17:00:00">17:00:00</option>
                        <option value="18:00:00">18:00:00</option>
                        <option value="19:00:00">19:00:00</option>
                        <option value="20:00:00">20:00:00</option>
                        <option value="21:00:00">21:00:00</option>
                        <option value="22:00:00">22:00:00</option>
                </select>
            </div>
            <div style="text-align: center; ">
                <button type="submit" class="btn btn-primary" style="padding: 10px 25px 10px 25px; font-size: 18px;">Submit</button>
            </div>
        </div>
    </form>

@endsection
