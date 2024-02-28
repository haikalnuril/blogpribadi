@extends('dashboard.layouts.main')

@section('container')

<div class="container">
        <div class="row my-3">
            <div class="col-lg-8 mt-3">
                <h2>{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success mb-3 mt-3"><i data-feather="arrow-left"></i>Back to my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3 mt-3"><i data-feather="edit"></i>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i data-feather="trash-2"></i>Delete</a></button>  
                  </form>

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
            </div>
        </div>
    </div>

@endsection