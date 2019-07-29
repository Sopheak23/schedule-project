@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('buildings.index') !!}">All Building</a>
        </li>
        <li class="breadcrumb-item active">{{ $building->name }}</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="pull-right" href="{{ route('floors.create', ['building_id' => $building->id]) }}">Add Floor <i class="fa fa-plus-square fa-lg"></i></a>
                            <strong>{{ $building->name }}</strong>
                            <a href="{!! route('buildings.index') !!}" class="btn btn-ghost-light">Back</a>
                        </div>
                        <div class="card-body">
                            @foreach($building->floors as $floor)
                                <a class="pull-right m-2" href="{!! route('rooms.create', $floor->id) !!}">Add Room <i class="fa fa-plus-square fa-lg"></i></a>

                                <div class="card-header">
                                    {{ $floor->name }}
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <div class="box">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    @foreach ($floor->rooms as $room)
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

                                                            <div class="card" style="max-width: 20rem;">
                                                                <h3 class="card-header">
                                                                    {{ $room->name }}
                                                                </h3>
                                                                <div class="card-body">
                                                                    {{--                                <p class="card-text">Total room:{!! $building->total_rooms !!}</p>--}}
                                                                    <p class="card-text">Total Students  :{!! $room->total_students !!}</p>
                                                                    {{--                                <p class="card-text">Total room per floor:{!! $building->total_rooms_per_floor !!}</p>--}}
                                                                </div>
                                                                <div class="card-footer">
                                                                    {!! Form::open(['route' => ['rooms.destroy', $room->id], 'method' => 'delete']) !!}
                                                                    <div class='btn-group'>
                                                                        <a href="{!! route('rooms.show', [$room->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                                                                        <a href="{!! route('rooms.edit', [$room->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
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
                                    </div>

                                </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
