@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('buildings.index') !!}">Building</a>
        </li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-plus-square-o fa-lg"></i>
                            <strong>Create Building</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'buildings.store'], 'Save', ['class' => 'btn btn-primary']) !!}

                            <!-- Name Field -->
                                <div class="form-group col-sm-6">
                                    {!! Form::label('name', 'Name:') !!}
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                </div>


                                <!-- Submit Field -->
                                <div class="form-group col-sm-12">
                                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                    <a href="{!! route('buildings.index') !!}" class="btn btn-default">Cancel</a>
                                </div>

                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
