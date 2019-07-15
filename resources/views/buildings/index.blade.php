@extends('layouts.app')

{{--@section('content')--}}
{{--<style>--}}
{{--  .uper {--}}
{{--    margin-top: 40px;--}}
{{--  }--}}
{{--</style>--}}
{{--<div class="uper">--}}
{{--  @if(session()->get('success'))--}}
{{--    <div class="alert alert-success">--}}
{{--      {{ session()->get('success') }}  --}}
{{--    </div><br />--}}
{{--  @endif--}}
{{--  <div>--}}
{{--    <a href="{{ route('buildings.create')}}" class="btn btn-primary">Add Building</a>--}}
{{--  </div>--}}
{{--  <table class="table table-striped">--}}
{{--    <thead>--}}
{{--        <tr>--}}
{{--          <td>ID</td>--}}
{{--          <td>Building Name</td>--}}
{{--          <td>Total Floors</td>--}}
{{--          <td>Total Rooms</td>--}}
{{--          <td>Total Rooms per Floor</td>--}}
{{--          <td colspan="2">Actions</td>--}}
{{--        </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--        @foreach($buildings as $building)--}}
{{--        <tr>--}}
{{--            <td>{{$building->id}}</td>--}}
{{--            <td>{{$building->building_name}}</td>--}}
{{--            <td>{{$building->total_floors}}</td>--}}
{{--            <td>{{$building->total_rooms}}</td>--}}
{{--            <td>{{$building->total_rooms_per_floor}}</td>--}}
{{--            <td><a href="{{ route('buildings.edit',$building->id)}}" class="btn btn-primary">Edit</a></td>--}}
{{--            <td>--}}
{{--                <form action="{{ route('buildings.destroy', $building->id)}}" method="post">--}}
{{--                  @csrf--}}
{{--                  @method('DELETE')--}}
{{--                  <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                </form>--}}
{{--            </td>--}}
{{--            <td><a href="{{ route('buildings.show',$building->id)}}" class="btn btn-primary">Rooms</a></td>--}}
{{--        </tr>--}}
{{--        @endforeach--}}
{{--    </tbody>--}}
{{--  </table>--}}
{{--</div>--}}
{{--@endsection--}}
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Buildings</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            Buildings
                            <a class="pull-right" href="{!! route('buildings.create') !!}"><i class="fa fa-plus-square fa-lg"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <div class="box">
                                    <div class="row">
                                        @foreach ($buildings as $building)
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                <div class="card" style="max-width: 20rem;">
                                                    <h3 class="card-header">
                                                        {{ $building->building_name }}
                                                    </h3>
                                                    <div class="card-body">
                                                        {{--                                <p class="card-text">Total room:{!! $building->total_rooms !!}</p>--}}
                                                        <p class="card-text">Total floor:{!! $building->total_floors !!}</p>
                                                        {{--                                <p class="card-text">Total room per floor:{!! $building->total_rooms_per_floor !!}</p>--}}
                                                    </div>
                                                    <div class="card-footer">
                                                        {!! Form::open(['route' => ['buildings.destroy', $building->id], 'method' => 'delete']) !!}
                                                        <div class='btn-group'>
                                                            <a href="{!! route('buildings.show', [$building->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                                                            <a href="{!! route('buildings.edit', [$building->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                                                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="pull-right mr-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

