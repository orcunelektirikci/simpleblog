@extends('layouts.master')

@section('content')

    {!! Form::model($post, ['method'=>'PUT','action'=>['PostController@update',$post->id],'files'=>true]) !!}

    {!! Form::label('title', 'Başlık') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}

    {!! Form::label('body', 'Blog') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>7]) !!}

    <br>
    {!! Form::select('category_id', $categories->pluck('category', 'id'), null, ['class'=>'form-control', '' => 'Bir Kategori Seçiniz']) !!}


    <br>
    {!! Form::file('image_path', ['class'=>'form-control-file']) !!}
    <br>
    {!! Form::submit('Gönder', ['class'=>'btn btn-info']) !!}

    {!! Form::close() !!}

@endsection