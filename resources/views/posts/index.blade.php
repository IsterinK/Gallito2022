@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Publicaciones de {{ $user->name }}</h1>
        @forelse ($posts as $post)
            @include('posts.subview-post')
        @empty
            <div class="alert alert-info" role="alert">
                El usuario no ha publicado mensajes
            </div>
        @endforelse
            <div class="mt-3" style="color:black">
                {{ $posts->links()}}
            </div>
    </div>
@endsection



