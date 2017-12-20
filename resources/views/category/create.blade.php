@extends('layouts.master')

@section('content')

    {!! Form::open(['action'=>'CategoryController@store']) !!}

    {!! Form::label('category', 'Kategori adı:') !!}
    {!! Form::text('category', null, ['class'=>'form-control']) !!}


<br>
    {!! Form::submit('Ekle', ['class'=>'btn btn-info']) !!}

    {!! Form::close() !!}
@stop