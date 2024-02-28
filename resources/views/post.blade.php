
@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <h5 class="my-3">By <a href="/portofolio?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> <a href="/portofolio?category={{ $post->category->name }}" class="text-decoration-none"> {{ $post->category->name   }}</a> Porto</h5>
                @if ($post->image)
                <div style="max-height:400px; overflow:hidden">
                    <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">         
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/portofolio/" class="d-block mt-3">Back to posts</a>
            </div>
        </div>
    </div>



@endsection