@extends('layouts.master')

@section('content')

{!! Form::open(['action'=>'PostController@store','files'=>true]) !!}

{!! Form::label('title', 'Başlık') !!}
{!! Form::text('title', null, ['class'=>'form-control']) !!}
@if ($errors->has('title'))
    <p>
        <strong>{{ $errors->first('title') }}</strong>
    </p>
@endif

{!! Form::label('body', 'Blog') !!}
{!! Form::textarea('body', null, ['class'=>'form-control','rows'=>7]) !!}
@if ($errors->has('body'))
    <p>
        <strong>{{ $errors->first('body') }}</strong>
    </p>
@endif

<br>
{!! Form::select('category_id', $categories->pluck('category', 'id'), null, ['class'=>'form-control', '' => 'Bir Kategori Seçiniz']) !!}


<br>
{!! Form::file('image_path', ['class'=>'form-control-file']) !!}
<br>
{!! Form::submit('Gönder', ['class'=>'btn btn-info']) !!}

{!! Form::close() !!}

@endsection