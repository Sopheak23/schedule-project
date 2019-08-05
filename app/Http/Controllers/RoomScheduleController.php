<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\day;
use App\Time;
use App\room;
use App\Assigned_Room;
use App\ClassRoom;
use Illuminate\Support\Facades\Validator;

class RoomScheduleController extends Controller
{
    public function index($building_id, $room_id){
        // dd($building_id.' '.$room_id );
        $days = day::all();
        $times = Time::all();
        $room = room::find($room_id);
        $assigned_rooms = Assigned_Room::all();
        return view('rooms.schedule',compact('days', 'times', 'room', 'assigned_rooms', 'building_id'));
    }

    public function filterClasses(Request $request){

        $selectedTime = $request->get('room_time');
        $selectedClass = $request->get('room_seats');

        $classList = ClassRoom::where('start_time', '=', $selectedTime)->where('total_students','<=', $selectedClass)->get();

        $output = '<option value="">Select Subject</option>';
        foreach($classList as $class)
        {
            $output .= '<option value="'.$class->id.'">'.$class->subject->subject_name.'</option>';
        }
        echo $output;

        // return view('shedule.index', compact('classed'));
    }

    public function store(Request $request, $room_id, $building_id){
        // dd($request);
        $validator = Validator::make($request->all(), [
            'room_id' => 'required',
            'class_id' => 'required',
            'day_id' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/schedules')
                        ->withErrors($validator)
                        ->withInput();
        }

        $assigned_room = new Assigned_Room;
        $assigned_room->room_id = $request->room_id;
        $assigned_room->class_id = $request->class_id;
        $assigned_room->day_id = $request->day_id;
        $assigned_room->start_time = $request->start_time;
        $assigned_room->end_time = $request->end_time;
        $assigned_room->save();

        return redirect()->action('RoomScheduleController@index', ['building_id'=> $building_id,'room_id' => $room_id])->with('message', 'Class has been assigned Successfully!!! ');;
    }
}
