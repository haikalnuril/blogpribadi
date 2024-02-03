@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>


    @if ($posts->count())
    <div class="card mb-3">
    <img src="https://source.unsplash.com/1920x1080?{{ $posts[0]->category->name }}, art" class="card-img-top" alt="...">
        <div class="card-body text-center">
        <h3 class="card-title"><a href="/portofolio/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <h7>By <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> <a href="/categories/{{ $posts[0]->category->name }}" class="text-decoration-none"> {{ $posts[0]->category->name   }}</a> Porto</h7>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/portofolio/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        <p class="card-text"><small class="text-body-secondary">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
        </div>
    </div>
    @else
    <p class="text-center fs-4">No Post Found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post )
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-21 text-white" style="background-color: rgba(0,0,0,0.4);"><a href="/categories/{{ $post->category->name }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/500x200?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/portofolio/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                        <h7>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></h7>
                        <p class="card-text"><small class="text-body-secondary">Last updated {{ $post->created_at->diffForHumans() }}</small></p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/portofolio/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection