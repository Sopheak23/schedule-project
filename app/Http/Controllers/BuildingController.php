<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building; 
use App\Room;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::all();
        return view('buildings.index', compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $building = new Building();

        $building->name = $request->name;
        $building->save();

        return redirect(route('buildings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $building = Building::find($id);

        return view('buildings.show')->with('building', $building);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $building = Building::find($id);
        return view('buildings.edit', compact('building'));
    }


    public function update(Request $request, $id)
    {
        $building = Building::find($id);
        $building->name = $request->name;
        $building->save();

        return redirect(route('buildings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $building = Building::find($id);
        $floors = $building->floors;

        foreach ($floors as $floor) {
            $rooms = $floor->rooms;
            foreach ($rooms as $room) {
                $room->delete();
            }
            $floor->delete();
        }

        $building->delete();
        
        return redirect('/buildings')->with('success', 'Building has been deleted Successfully');
    }
}
