@extends('layouts.master')


@section('content')

                @if($posts)
                    @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title"><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2>
                        <p class="blog-post-meta">{{$post->user->name}}  -  {{ $post->created_at->diffForHumans()}}</p>
                        @if($post->image_path)
                            <img width="500" src="{{url('images/'.$post->image_path)}}" >

                        @endif
                    </div><!-- /.blog-post -->
                        <hr>
                    @endforeach

                    {{$posts->links()}}
                @endif
{{--<nav class="blog-pagination">--}}
    {{--<a class="btn btn-outline-primary" href="#">Older</a>--}}
    {{--<a class="btn btn-outline-secondary disabled" href="#">Newer</a>--}}
{{--</nav>--}}


@endsection