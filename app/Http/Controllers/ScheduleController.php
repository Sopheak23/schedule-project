<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Day;
use App\Time;
use App\Room;
use App\Day_Part;
use App\TestTime;
use App\Assigned_Room;
use App\ClassRoom;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    public function index($id){
        // dd($id);
        $classes = Classes::all();
        $assigned_rooms = Assigned_Room::all();
        $days = Day::all();
        $times = Time::all();
        $rooms = Room::where('building_id', '=', $id)->get();
        $building_id = $id;
        $day_parts = Day_Part::all();
        $test_times = TestTime::all();
        return view('buildings.schedule', compact('classes','assigned_rooms','days','times','rooms','day_parts', 'test_times', 'building_id'));

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

    public function store(Request $request, $id){
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

        return redirect()->action('ScheduleController@index', ['id' => $id])->with('message', 'Class has been assigned Successfully!!! ');;
    }
}
