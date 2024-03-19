@extends('layouts.main')

@section('container')
    <h1>About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>     
    <img src="img/{{ $image}}" alt="{{ $name }}" width="300" class="img-thumbnail rounded">
    <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
@endsection