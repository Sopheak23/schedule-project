@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('rooms.index') !!}">Room</a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit fa-lg"></i>
                            <strong>Edit Room</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::model($room, ['route' => ['rooms.update', $room->id], 'method' => 'patch']) !!}

                            <!-- Name Field -->
                                <div class="form-group col-sm-6">
                                    {!! Form::label('name', 'Name:') !!}
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                </div>

                                <!-- Total Students Field -->
                                <div class="form-group col-sm-6">
                                    {!! Form::label('total_students', 'Total Students:') !!}
                                    {!! Form::number('total_students', null, ['class' => 'form-control']) !!}
                                </div>

                                <!-- Submit Field -->
                                <div class="form-group col-sm-12">
                                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                                    <a href="{!! route('buildings.show', $building_id) !!}" class="btn btn-default">Cancel</a>
                                </div>


                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection