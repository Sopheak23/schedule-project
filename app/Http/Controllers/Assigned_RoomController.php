<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assigned_Room;
use App\Classes;
use App\Day;
use App\Time;
use App\Room;
use App\Day_Part;
use Illuminate\Support\Facades\Validator;
use App\test_time;
use Symfony\Component\Console\Helper\Table;

class Assigned_RoomController extends Controller
{

    /** */
    public function index(){
        $classes = Classes::all();
        $assigned_rooms = Assigned_Room::all();
        $days = Day::all();
        $times = Time::all();
        $rooms = Room::all();
        $day_parts = Day_Part::all();
        $test_times = test_time::all();
        return view('schedule.index', compact('classes','assigned_rooms','days','times','rooms','day_parts', 'test_times'));
    }

    public function create($selected_time){
        dd($selected_time);
        $classed = Classes::find($selected_time);
        return view('shedule.index', compact('classed'));
    }

    public function store(Request $request){

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

        return redirect('/schedules')->with('message', 'Class has been assigned Successfully!!! ');;
    }

}
