@extends('layouts.app')
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
                                    <div class="container">
                                        <div class="row">
                                            @foreach ($buildings as $building)
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                    <div class="card" style="max-width: 20rem;">
                                                        <h3 class="card-header">
                                                            {{ $building->name }}
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