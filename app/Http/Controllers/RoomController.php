<?php

namespace App\Http\Controllers;

use App\Assigned_Room;
use App\Classes;
use App\Day;
use App\Day_Part;
use App\Floor;
use App\test_time;
use App\Time;
use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    /**
     * @param $floor_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($floor_id)
    {
        return view('rooms.create')->with('floor_id', $floor_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new Room();

        $floor_id = $request->floor_id;
        $floor = Floor::find($floor_id);
        $building_id = $floor->building->id;

        $room->name = $request->name;
        $room->total_students = $request->total_students;
        $room->floor_id = $request->floor_id;
        $room->save();

        return redirect(route('buildings.show', $building_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classes = Classes::all();
        $assigned_rooms = Assigned_Room::all();
        $days = Day::all();
        $times = Time::all();
        $rooms = Room::all();
        $day_parts = Day_Part::all();
        $test_times = test_time::all();
        return view('schedule.index', compact('classes','assigned_rooms','days','times','rooms','day_parts', 'test_times'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $room = Room::find($id);
        $room->name = $request->name;
        $room->total_students = $request->total_students;
        $room->save();

        return redirect(route('buildings.show', $room->floor->building->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $building_id = $room->building_id;
        $room->delete();
        return redirect('/buildings/'. $building_id)->with('success', 'Room has been deleted Successfully');
    }
}
