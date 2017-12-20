@extends('layouts.master')


@section('content')

                @if($posts)
                    @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title"><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2>
                        <p class="blog-post-meta">{{$post->user->name}}  -  {{ $post->created_at->diffForHumans()}}</p>
                        @if($post->image_path)
                            <img class="photo" width="80%" src="{{url('images/'.$post->image_path)}}" >
                        @endif
                    </div>
                        <hr>
                    @endforeach
{{--@if(count($posts)>6)--}}
                    {{$posts->links()}}
                {{--@endif--}}
                    @endif
{{--<nav class="blog-pagination">--}}
    {{--<a class="btn btn-outline-primary" href="#">Older</a>--}}
    {{--<a class="btn btn-outline-secondary disabled" href="#">Newer</a>--}}
{{--</nav>--}}


@endsection