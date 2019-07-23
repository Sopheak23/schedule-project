<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Subject;
use App\Day;
use App\Time;
use App\Prof_Dept;
use App\Classes;

    class ClassController extends Controller
    {

        public function index(){
            $classes = Classes::all();
            // $subjects = Subject::all();
            // $days = Day::all();
            // $times = Time::all();
            // $prof_depts = Prof_Dept::all();
            return view('classes.index',compact('classes'));
        }

        public function create(){
            $departments = Department::all();
            $subjects = Subject::all();
            // $days = Day::all();
            // $times = Time::all();
            $prof_depts = Prof_Dept::all();
            return view('classes.create', compact('departments','subjects','days','times','prof_depts'));
        }

        public function store(request $request){
            // dd($request->all());
            $classes = new Classes([
                        'subject_id' => $request->get('subject_id'),
                        'prof_dept_id' => $request->get('prof_dept_id'),
                        'total_students' => $request->get('total_students'),
                        'day' => $request->get('day_id'),
                        'start_time' => $request->get('start_time'),
                        'end_time' => $request->get('end_time')
           ]);
            $classes->save();
            return redirect('/classes')->with('success', 'Building has been added');
        }

    //     /**
    //      * Show the form for editing the specified resource.
    //      *
    //      * @param  int  $id
    //      * @return \Illuminate\Http\Response
    //      */
    public function edit($id)
    {
        $classes = Classes::find($id);
        $departments = Department::all();
        $subjects = Subject::all();
        $days = Day::all();
        $times = Time::all();
        $prof_depts = Prof_Dept::all();
        return view('classes.edit', compact('classes','departments','subjects','days','times','prof_depts'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {

        $classes = Classes::find($id);
        $classes->subject_id = $request->get('subject_id');
        $classes->prof_dept_id = $request->get('prof_dept_id');
        $classes->total_students = $request->get('total_students');
        $classes->day = $request->get('day_id');
        $classes->start_time = $request->get('start_time');
        $classes->end_time = $request->get('end_time');
        $classes->save();
        return redirect('/classes')->with('success', 'Update Classes');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        $classes = Classes::find($id);
        $classes->delete();
        return redirect('/classes')->with('success', 'Classes has been deleted Successfully');
    }
}
