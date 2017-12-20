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
                    {{$posts->links()}}
                    @endif
@endsection