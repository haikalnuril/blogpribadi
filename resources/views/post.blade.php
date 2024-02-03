
@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <h5 class="my-3">By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> <a href="/categories/{{ $post->category->name }}" class="text-decoration-none"> {{ $post->category->name   }}</a> Porto</h5>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/portofolio/" class="d-block mt-3">Back to posts</a>
            </div>
        </div>
    </div>



@endsection