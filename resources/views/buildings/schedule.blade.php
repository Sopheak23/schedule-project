{{-- {{-- @extends('layout') --}}

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}" />
{{-- ajax --}}
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

{{-- @section('content') --}}

@if ($errors->any())
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ implode('', $errors->all(':message ')) }}</strong>
    </div>
@endif
@if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('message') }}
    </div>
@endif
<div style="margin: 10px 10px 20px 5px;">
    <h3 style="display: inline;">Schedule : {{$building->building_name}}</h3>
    <button type="submit" class="btn btn-primary" style="display: inline; float: right; "><a href="{{ URL('buildings/'.$building->id )}}" style="color:white;">Back</a></button>
</div>

<div>
    <table class="table table-bordered" style="font-size:10px;text-align:center;vertical-align: middle;">
        <thead>
            <tr>
            {{-- span of room number column --}}
                <th rowspan="2">Room No:</th>
                {{-- show days --}}
                @foreach ($days as $day)
                    <th class="mainDay  _{{$day->day}}" colspan="3">{{$day->day}}</th>
                @endforeach
            </tr>
            <tr>
            {{-- show day by part such as Morning... --}}
                @foreach ($days as $day)
                    @foreach ($day_parts as $day_part)
                    <td class="shiftDay_{{$day->day}}_{{$day_part->name}}">
                        {{$day_part->name}}
                    </td>
                    @endforeach
                @endforeach
            </tr>
        </thead>
        <tbody>
        {{-- display each room name --}}
            @foreach ($rooms as $room)
                <tr>
                    <th class="room_{{$room->room_name}}" rowspan="5">
                        {{$room->room_name}}
                    </th>
                    {{-- display each day --}}
                    @foreach ($test_times as $test_time)
                            @foreach ($days as $day)
                            {{-- display three time a day --}}
                                    @for ($i = 0; $i < 1; $i++)
                                        <td  style="padding:0; white-space: normal;">
                                            {{-- //  --}}
                                            <?php $assigned = false; ?>
                                            @foreach ($assigned_rooms as $assigned_room)
                                                @if ($assigned_room->start_time === $test_time->morning && $assigned_room->day->day == $day->day && $assigned_room->room->room_name == $room->room_name)
                                                    <button type="button" data-time="{{$test_time->morning}}" data-day="{{$day->day}}" data-day_id="{{$day->id}}" data-room_id="{{$room->id}}" data-room="{{$room->room_name}}"  class="btn btn-light  btn-xs col-lg-12" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-size: 12px;border-radius:0px; width:70px; height:28px; background-color:#dc3545; border-color:#dc3545; color:white;" data-toggle="modal" data-target="#myModal" id="myButton" disabled="true" >
                                                        {{-- <span style="font-size: 12px;width: 70px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis"></span> --}}
                                                        {{$assigned_room->class->subject->subject_name}}
                                                        <?php $assigned = true; ?>
                                                    </button>
                                                @endif
                                            @endforeach
                                            @if ($assigned === false)
                                                <button type="button" data-room_seats={{$room->total_students}} data-time="{{$test_time->morning}}" data-day="{{$day->day}}" data-day_id="{{$day->id}}" data-room_id="{{$room->id}}" data-room="{{$room->room_name}}"  class="btn btn-light" style="font-size: 12px;border-radius:0px;width:70px; height:28px;" data-toggle="modal" data-target="#myModal" id="myButton">
                                                    {{-- <span style="font-size: 12px;padding-bottom:5px;width: 70px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis"></span> --}}
                                                    {{$test_time->morning}}
                                                </button>
                                            @endif
                                        </td>
                                        <td  style="padding:0;">
                                            <?php $assigned = false; ?>
                                            @foreach ($assigned_rooms as $assigned_room)
                                                @if ($assigned_room->start_time === $test_time->afternoon && $assigned_room->day->day == $day->day && $assigned_room->room->room_name == $room->room_name)
                                                    <button type="button" data-time="{{$test_time->morning}}" data-day="{{$day->day}}" data-day_id="{{$day->id}}" data-room_id="{{$room->id}}" data-room="{{$room->room_name}}"  class="btn btn-light  btn-xs col-lg-12" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-size: 12px;border-radius:0px;width:70px; height:28px; background-color:#dc3545; border-color:#dc3545; color:white;" data-toggle="modal" data-target="#myModal" id="myButton" disabled="true" >
                                                        {{-- <span style="font-size: 12px;padding-bottom:5px;width: 70px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis"></span> --}}
                                                        {{$assigned_room->class->subject->subject_name}}
                                                        <?php $assigned = true; ?>
                                                    </button>
                                                @endif
                                            @endforeach
                                            @if ($assigned === false)
                                                <button type="button" data-room_seats={{$room->total_students}} data-time="{{$test_time->afternoon}}" data-day="{{$day->day}}" data-day_id="{{$day->id}}" data-room_id="{{$room->id}}" data-room="{{$room->room_name}}"  class="btn btn-light" style="font-size: 12px;border-radius:0px;width:70px; height:28px;" data-toggle="modal" data-target="#myModal" id="myButton">
                                                    {{-- <span style="font-size: 12px;padding-bottom:5px;width: 70px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis"></span> --}}
                                                    {{$test_time->afternoon}}
                                                </button>
                                            @endif
                                        </td>
                                        <td  style="padding:0;">
                                            <?php $assigned = false; ?>
                                            @foreach ($assigned_rooms as $assigned_room)
                                                <?php $time = null; ?>
                                                @if ($assigned_room->start_time === $test_time->evening && $assigned_room->day->day == $day->day && $assigned_room->room->room_name == $room->room_name)
                                                    <button type="button" data-time="{{$test_time->morning}}" data-day="{{$day->day}}" data-day_id="{{$day->id}}" data-room_id="{{$room->id}}" data-room="{{$room->room_name}}"  class="btn btn-light  btn-xs col-lg-12" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-size: 12px;border-radius:0px;width:70px; height:28px; background-color:#dc3545; border-color:#dc3545; color:white;" data-toggle="modal" data-target="#myModal" id="myButton" disabled="true" >
                                                        {{-- <span style="font-size: 12px;padding-bottom:5px;width: 70px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis"></span> --}}
                                                        {{$assigned_room->class->subject->subject_name}}
                                                        <?php $assigned = true; ?>
                                                    </button>
                                                @endif
                                            @endforeach
                                            @if ($assigned === false)
                                                <button type="button" data-room_seats={{$room->total_students}} data-time="{{$test_time->evening}}" data-day="{{$day->day}}" data-day_id="{{$day->id}}" data-room_id="{{$room->id}}" data-room="{{$room->room_name}}"  class="btn btn-light" style="font-size: 12px;border-radius:0px;width:70px; height:28px;" data-toggle="modal" data-target="#myModal" id="myButton">
                                                    {{-- <span style="font-size: 12px;padding-bottom:5px;width: 70px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis"></span> --}}
                                                    {{$test_time->evening}}
                                                </button>
                                            @endif
                                        </td>
                                    @endfor
                        @endforeach
                    </tr>
                        @endforeach
            @endforeach
        </tbody>
    </table>
</div>


<div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="text-align:center;">
            <div class="modal-header" style="background-color:#3700B3; color:white;">
                <h5 class="modal-title" id="exampleModalLabel" style="margin: 0 auto;">ASSIGN CLASSROOM DIALOG</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body">
                <form action="{{route('BuildingStoreAssignedClass',['id'=> $building->id])}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group row" style="margin: 40 0 40 50px; width: 600px; height: 50px;margin-bottom: 40px; font-weight:bold;">
                        <label class="col-sm-2 col-form-label">Class </label>
                        <div class="col-sm-10">
                            <select type="text" class="form-control" id="class_id" name="class_id" placeholder="Class Name">
                                <option id="class_init_opt" value="">Select Subject</option>
                                @foreach ($classes as $class)
                                    {{-- @if ($class->time == time) --}}
                                        <option value="{{$class->id}}">{{$class->subject->subject_name}}</option>
                                    {{-- @endif --}}
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" style="margin: 40 0 40 50px; width: 600px; height: 50px;margin-bottom: 40px; font-weight:bold;">
                        <label class="col-sm-2 col-form-label">Day </label>
                        <div class="col-sm-10">
                            <select type="text" class="form-control" id="day_id" name="day_id" placeholder="Class Name">
                                <option id="day_init_opt" value="">Teaching Day</option>
                                @foreach ($days as $day)
                                    <option value="{{$day->id}}">{{$day->day}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" style="margin: 40 0 40 50px; width: 600px; height: 50px;margin-bottom: 40px; font-weight:bold;">
                        <label class="col-sm-2 col-form-label">Start </label>
                        <div class="col-sm-10">
                            <select type="text" class="form-control" id="start_time" name="start_time" placeholder="Class Name">
                                    <option id="start_init_opt" value="">Start Time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time->time}}">{{$time->time}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" style="margin: 40 0 40 50px; width: 600px; height: 50px;margin-bottom: 40px; font-weight:bold;">
                        <label class="col-sm-2 col-form-label">End </label>
                        <div class="col-sm-10">
                            <select type="text" class="form-control" id="end_time" name="end_time" placeholder="End Time">
                                <option id="end_init_opt" value="">End Time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time->time}}">{{$time->time}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- hidden input --}}
                    <input type="hidden" class="room_id" name="room_id" id="room_id" value="null">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button type="submit" id="save_assign" class="btn btn-primary" style="margin-left: 50px;background-color: #7db300;border-color:#7db300;">Save Assign</button>

                </form>
            </div>
        </div>
    </div>
</div>

{{-- bootstrap --}}
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){

    var getSelectedTime;
    // function to get the event of click and send to modal
    $('#myModal').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var day = button.data('day');
        var room_id = button.data('room_id');
        var day_id = button.data('day_id');
        var time = button.data('time');

        var modal =$(this); // get the this modal DOM

        modal.find('form #day_init_opt').val(day_id)
        modal.find('form #day_init_opt').text(day)
        modal.find('form #room_id').val(room_id)
        modal.find('form if').val(time)

   })



   //function to check the disable cell
   $('.btn-light').on('click', function(event){
        var thisCell = $(this);
        var selectedCell = thisCell;
        if(selectedCell.is('disable')){
            console.log('button is diable');
        } else {
            console.log('button is enable');
            var room_time =  $(this).attr('data-time');
            var room_seats = $(this).attr('data-room_seats');

            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "/buildings/schedule/"+room_time,
                data: ({
                        room_time: room_time,
                        room_seats: room_seats,
                }),
                success: function(result){
                    // console.log(result);
                    $('#class_id').html(result);
                }
            });
        }
   })

   // if using ajax
   // function to disable the cell after assigned
   $('#save_assign').on('click', function(){
        selectedcell.css("background-color", "red");
        selectedcell.attr('disable', true);
   });

   // function to disable cell when render
   function diableCell(){
        selectedcell.css("background-color", "red");
        selectedcell.attr('disable', true);
   }



});


</script>
