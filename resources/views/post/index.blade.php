@extends('layouts.master')

@section('content')
                <div class="blog-post">
                <h2 class="blog-post-title col-sm-12">{{$post->title}}</h2>

@auth

                        {!! Form::open(['method'=>'POST', 'action' =>['LikeController@store']]) !!}

                        {{ Form::hidden('post_id', $post->id) }}

                        {{--<p><a href="{{route('like.store')}}">Beğen</a></p>--}}
                        {!! Form::submit('Beğen', ['class'=>'btn btn-info']) !!}

                        {!! Form::close() !!}

@if($post->likes)
                        <p class="col-sm-6">{{$post->likes->count()}} Beğeni </p>
    @else
                            <p class="col-sm-6">0 Beğeni </p>
    @endif



@endauth
                <p class="blog-post-meta">{{$post->user->name}}  -  {{ $post->created_at->diffForHumans()}}</p>
@if($post->image_path)
                <img width="500" src="{{url('images/'.$post->image_path)}}" >

@endif
                    <br>
                <p>{{$post->body}}</p>
            </div><!-- /.blog-post -->
            @if(Auth::user()==$post->user)
            <hr>
            <a class="btn btn-success col-sm-3 pull-left" href="{{route('posts.edit',$post->id)}}">Gönderiyi Düzenle</a>
            {!! Form::open(['method'=>'DELETE', 'action' =>['PostController@destroy', $post->id]]) !!}

            {!! Form::submit('Gönderiyi Sil', ['class'=>'col-sm-3 btn btn-danger btn-btmm pull-left']) !!}

            {!! Form::close() !!}
            @endif
    <hr>
            @auth
            {!! Form::open(['method'=>'POST', 'action' =>['CommentController@store']]) !!}

            {{ Form::hidden('post_id', $post->id) }}

            {!! Form::button('Yorum Yap', ['onclick'=>'showComment()', 'class'=>'col-sm-3 btn btn-sm btn-btmm pull-right']) !!}
    <br>
            {!! Form::textarea('body', null, ['rows'=>'3', 'class'=>'form-control yorum']) !!}

            {!! Form::submit('Gönder', ['class'=>'col-sm-3 btn pull-right gndr-btn']) !!}

            {!! Form::close() !!}
            @endauth
            @if($post->comments)
            <div class="col-m-5 btn-btmm">
              <h4>Yorumlar</h4>


                 @foreach($post->comments as $comment)
                    <div id="yorumid">

            <p>{{$comment->user->name}}  -  {{$comment->created_at->diffForHumans()}}</p>

            <p>{{$comment->body}}</p>
                    @auth
                        {!! Form::open(['method'=>'POST', 'action' =>['LikeController@store']]) !!}

                        {{ Form::hidden('comment_id', $comment->id) }}

                        {{--<p><a href="{{route('like.store')}}">Beğen</a></p>--}}
                        {!! Form::submit('Beğen', ['class'=>'btn btn-info']) !!}
                            @if($comment->likes)
                                <p class="col-sm-6">{{$comment->likes->count()}} Beğeni </p>
                            @else
                                <p class="col-sm-6">0 Beğeni </p>
                            @endif

                        {!! Form::close() !!}



                    @endauth
                </div>

              @endforeach

    </div>

            @endif

@endsection