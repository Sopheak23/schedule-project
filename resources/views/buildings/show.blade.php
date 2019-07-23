@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            <br />
        @endif
    <div class="card-header">
        {{$buildings->building_name}}
    </div>
    <div style=" display: inline-block;padding: 15px 50px 15px 31px; width: 100%;">
        <a href="{{ route('rooms.create')}}/{{$buildings->id}}" class="btn btn-primary">Add Room</a>
        <a href="{{ route('building.schedule', ['id' => $buildings->id ])}}" class="btn btn-primary" style="float: right;">View Schedule of Building</a>
    </div>
    <div class="table-responsive-sm">
        <div class="box">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($buildings->rooms as $room)
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                            <div class="card" style="max-width: 20rem;">
                                <h3 class="card-header">
                                    {{ $room->room_name }}
                                </h3>
                                <div class="card-body">
                                    {{--                                <p class="card-text">Total room:{!! $building->total_rooms !!}</p>--}}
                                    <p class="card-text">Total Students  :{!! $room->total_students !!}</p>
                                    {{--                                <p class="card-text">Total room per floor:{!! $building->total_rooms_per_floor !!}</p>--}}
                                </div>
                                <div class="card-footer">
                                    {!! Form::open(['route' => ['buildings.destroy', $buildings->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        <a href="{!! route('ShowRoomSchedule', ['building_id'=> $buildings->id , 'room_id'=> $room->id ]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                                        <a href="{!! route('buildings.edit', [$buildings->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
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
@endsection
