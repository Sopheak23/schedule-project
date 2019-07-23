@extends('layouts.app')

@section('content')
    <div style="margin: 10px 0px 0px 20px;">
        <h2>Schedule Room: {{$room->room_name}}</h2>
        <br>
    </div>
    <div id="container" style="padding: 0px 15px 0px 15px;">
        <table id="customers" class="table table-bordered" style="text-align: center;">
            <thead>
                <tr>
                    <th style="width: 120px;">Time & Day</th>
                    @foreach($days as $day)
                        <th>{{$day->day}}</th>
                    @endforeach
                </tr>
            </thead>

            <tbody>
                @foreach($times as $time)
                    <tr>
                        <th>{{$time->time}}</th>
                        @foreach($days as $day)
                            <td style="padding: 0px;">
                                <?php $assigned = false; ?>
                                @foreach ($assigned_rooms as $assigned_room)
                                    @if ($assigned_room->start_time === $time->time && $assigned_room->day->day == $day->day && $assigned_room->room->room_name == $room->room_name)
                                        <button type="button" data-time="{{$time->time}}" data-day="{{$day->day}}" data-day_id="{{$day->id}}" data-room_id="{{$room->id}}" data-room="{{$room->room_name}}"  class="btn btn-light  btn-xs col-lg-12" style="width: 166px; height: 50px;white-space: normal;font-size: 12px;border-radius:0px;background-color:#dc3545; border-color:#dc3545; color:white;" data-toggle="modal" data-target="#myModal" id="myButton" disabled="true" >
                                            {{-- <span style="font-size: 12px;width: 70px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis"></span> --}}
                                            {{$assigned_room->class->subject->subject_name}}
                                            <?php $assigned = true; ?>
                                        </button>
                                    @endif
                                @endforeach
                                @if ($assigned === false)
                                    <button type="button" data-room_seats={{$room->total_students}} data-time="{{$time->time}}" data-day="{{$day->day}}" data-day_id="{{$day->id}}" data-room_id="{{$room->id}}" data-room="{{$room->room_name}}"  class="btn btn-light" style="width: 166px; height: 50px;white-space: normal; font-size: 12px;border-radius:0px;" data-toggle="modal" data-target="#myModal" id="myButton">
                                        {{-- <span style="font-size: 12px;padding-bottom:5px;width: 70px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis"></span> --}}
                                        {{-- {{$time->time}} --}}
                                    </button>
                                @endif
                            </td>
                        @endforeach

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Modal --}}
    <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="text-align:center;">
                    <div class="modal-header" style="background-color:#3700B3; color:white;">
                        <h5 class="modal-title" id="exampleModalLabel" style="margin: 0 auto;">ASSIGN CLASSROOM DIALOG</h5>
                    </div>
                    <div class="modal-body" style="padding: 50px 0px 50px 80px;">
                        <form action="{{route('RoomStoreAssignedClass', ['building' => $building_id, 'room_id' => $room->id ])}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group row" style="margin: 40 0 40 50px; width: 600px; height: 50px;margin-bottom: 40px; font-weight:bold;">
                                <label class="col-sm-2 col-form-label">Class </label>
                                <div class="col-sm-10">
                                    <select type="text" class="form-control" id="class_id" name="class_id" placeholder="Class Name">
                                        <option id="class_init_opt" value="">Select Subject</option>
                                        {{-- @foreach ($classes as $class) --}}
                                            {{-- @if ($class->time == time) --}}
                                                {{-- <option value="{{$class->id}}">{{$class->subject->subject_name}}</option> --}}
                                            {{-- @endif --}}
                                        {{-- @endforeach --}}
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

                            <button type="submit" id="save_assign" class="btn btn-primary" style="margin-left: 20px;background-color: #7db300;border-color:#7db300;">Save Assign</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                        url: "/buildings/room/schedule/"+room_time,
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

@endsection
