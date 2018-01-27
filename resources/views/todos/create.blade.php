@extends('layouts.app')
@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['action'=>'TodosController@store','method'=>'post']) !!}
    {{ Form::bsText('text',"",["class"=>"form-control"]) }}
    {{ Form::bsTextarea('body',"",["class"=>"form-control"]) }}
    {{ Form::bsText('due',"",["class"=>"form-control"]) }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}
@endsection