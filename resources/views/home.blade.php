@extends('layouts.app')

@section('content')

<div class="container">
    @forelse ($posts as $post)
        @include('posts.index')
    @empty
        <div class="alert alert-danger">
            <h5>No hay usuarios registrados en la plataforma</h5>
        </div>
    @endforelse
</div>

@endsection
