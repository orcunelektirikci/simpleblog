@extends('layouts.master')

@section('content')
                <div class="blog-post">
                <h2 class="blog-post-title col-sm-12">{{$post->title}}</h2>

@auth
<div class="col-sm-12">
                        {!! Form::open(['method'=>'POST', 'action' =>['LikeController@store']]) !!}

                        {{ Form::hidden('post_id', $post->id) }}

                        {{--<p><a href="{{route('like.store')}}">Beğen</a></p>--}}
    <button class='btn btn-default btn btn-link btn-sm col-sm-3 pull-left' type='submit' value='submit'>
        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Beğen
    </button>
                        {{--{!! Form::submit('Beğen', ['class'=>'btn btn-info btn-sm col-sm-3 pull-left']) !!}--}}

                        {!! Form::close() !!}

@if($post->likes)
                        <p class="col-sm-9 pull-left">{{$post->likes->count()}} Beğeni </p>
    @else
                            <p class="col-sm-9">0 Beğeni </p>
    @endif
</div>


@endauth
                    <br>
                <p class="blog-post-meta col-sm-12">{{$post->user->name}}  -  {{ $post->created_at->diffForHumans()}}</p>
@if($post->image_path)
                <img class="photo-in" width="65%" src="{{url('images/'.$post->image_path)}}" >

@endif
                    <br>
                <p>{{$post->body}}</p>
            </div><!-- /.blog-post -->
            @if(Auth::user()==$post->user)
            <hr>
             <a class="btn btn-default btn-sm col-sm-3 pull-left" href="{{route('posts.edit',$post->id)}}"><i class="fa fa-text-width" aria-hidden="true"></i>   Gönderiyi Düzenle</a>

            {!! Form::open(['method'=>'DELETE', 'action' =>['PostController@destroy', $post->id]]) !!}

            <button class='col-sm-3 btn btn-sm btn-danger btn-btmm pull-left' type='submit' value='submit'>
                <i class="fa fa-trash-o" aria-hidden="true"></i> Gönderiyi Sil
            </button>

            {{--{!! Form::submit('Gönderiyi Sil', ['class'=>'col-sm-3 btn btn-sm btn-danger btn-btmm pull-left']) !!}--}}

            {!! Form::close() !!}
            @endif
<br>
            @auth
            {!! Form::open(['method'=>'POST', 'action' =>['CommentController@store']]) !!}

            {{ Form::hidden('post_id', $post->id) }}

            <button onclick="showComment()" class='col-sm-3 btn btn-sm btn-btmm pull-right' type="button">
                <i class="fa fa-comment-o" aria-hidden="true"></i> Yorum Yap
            </button>
            {{--{!! Form::button('Yorum Yap', ['onclick'=>'showComment()', 'class'=>'col-sm-3 btn btn-sm btn-btmm pull-right']) !!}--}}
    <br>
            {!! Form::textarea('body', null, ['rows'=>'3', 'class'=>'form-control yorum']) !!}



            {!! Form::submit('Gönder', ['class'=>'col-sm-3 btn btn-sm pull-right gndr-btn']) !!}

            {!! Form::close() !!}
            @endauth
            @if($post->comments)
            <div class="btn-btmm">
                <br>
              <h4 id="yorum-baslik" class="col-lg-12 col-lg-offset-12">Yorumlar</h4>
                <hr>


                 @foreach($post->comments as $comment)
                    <div id="yorumid">

            <p>{{$comment->user->name}}  -  {{$comment->created_at->diffForHumans()}}</p>

            <p>{{$comment->body}}</p>
                    @auth
                        {!! Form::open(['method'=>'POST', 'action' =>['LikeController@store']]) !!}

                            {{ Form::hidden('comment_id', $comment->id) }}
                        <div class="col-sm-6">
                            {{--<p><a href="{{route('like.store')}}">Beğen</a></p>--}}

                            <button class='btn btn-default btn btn-link btn-sm col-sm-3 pull-left' type='submit' value='submit'>
                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Beğen
                            </button>
                            {{--{!! Form::submit('Beğen', ['class'=>'btn btn-sm col-sm-4 btn-info pull-left']) !!}--}}
                            @if($comment->likes)
                                <p class="col-sm-8 pull-right">{{$comment->likes->count()}} Beğeni </p>
                            @else
                                <p class="col-sm-8 pull-right">0 Beğeni </p>
                            @endif

                            {!! Form::close() !!}
                        </div>
                    @endauth
                        <br>
                    </div>
                     <hr>
              @endforeach


              </div>

            @endif

@endsection