@extends('dashboard.layouts.main')

@section('container')

<div class="container">
        <div class="row my-3">
            <div class="col-lg-8 mt-3">
                <h2>{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success mb-3 mt-3"><i data-feather="arrow-left"></i>Back to my posts</a>
                <a href="" class="btn btn-warning mb-3 mt-3"><i data-feather="edit"></i>Edit</a>
                <a href="" class="btn btn-danger mb-3 mt-3"><i data-feather="trash-2"></i>Delete</a>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>

@endsection