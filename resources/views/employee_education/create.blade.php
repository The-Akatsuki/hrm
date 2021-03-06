@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New employee_education</h1>
    <hr/>

    {!! Form::open(['url' => '/employee_education', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('employee_id') ? 'has-error' : ''}}">
                {!! Form::label('employee_id', 'Employee Id', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('employee_id', $employees, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('employee_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('qualification_id') ? 'has-error' : ''}}">
                {!! Form::label('qualification_id', 'Qualification', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('qualification_id', $qualification,null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('qualification_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('institute') ? 'has-error' : ''}}">
                {!! Form::label('institute', 'Institute', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('institute', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('institute', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
                {!! Form::label('start_date', 'Start Date', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('completed_on') ? 'has-error' : ''}}">
                {!! Form::label('completed_on', 'Completed On', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('completed_on', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('completed_on', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</div>
@endsection