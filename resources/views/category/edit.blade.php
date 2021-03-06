@extends('layouts.master')

@section('content')

    {!! Form::model($category, ['method' => 'PATCH','action' => ['CategoryController@update', $category->id]]) !!}

    {!! Form::label('category', 'Kategori adı:') !!}
    {!! Form::text('category', null, ['class'=>'form-control']) !!}
    <br>
    {!! Form::submit('Düzenle', ['class'=>'col-m-6 btn btn-success']) !!}

    {!! Form::close() !!}







         {!! Form::open(['method'=>'DELETE', 'action' =>['CategoryController@destroy', $category->id]]) !!}

         {!! Form::submit('Sil', ['id'=>'sil-btn','class'=>'col-m-6 btn btn-danger pull-right']) !!}

         {!! Form::close() !!}




@stop