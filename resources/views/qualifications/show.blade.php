@extends('layouts.app')

@section('content')
<div class="container">

    <h1>qualification {{ $qualification->id }}
        <a href="{{ url('qualifications/' . $qualification->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit qualification"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['qualifications', $qualification->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete qualification',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $qualification->id }}</td>
                </tr>
                <tr><th> Qualification </th><td> {{ $qualification->qualification }} </td></tr><tr><th> Description </th><td> {{ $qualification->description }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
