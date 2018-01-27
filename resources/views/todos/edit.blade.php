
@extends('layouts.app')

@section('content')

    <a class="btn btn-default" href="/todo/{{ $todo->id}}"> Go Back</a>

   <h3>Edit Todo</h3>
   {!! Form::open(['action'=>['TodosController@update',$todo->id],'method'=>'post']) !!}
   {{ Form::bsText('text',$todo->text,["class"=>"form-control"]) }}
   {{ Form::bsTextarea('body',$todo->body,["class"=>"form-control"]) }}
   {{ Form::bsText('due',$todo->due,["class"=>"form-control"]) }}
   {{ Form::hidden('_method', 'PUT') }}
   {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
   {!! Form::close() !!}

@endsection

