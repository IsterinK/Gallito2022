@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar una publicación</h1>
        @include('layouts.subview-form-errors')
        {!! Form::model($post, ['method' => 'PUT','route' => ['posts.update', $post->id]]) !!}
            <form>
                @include('posts.subview-posts-fields')
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        {!! Form::close() !!}
    </div>
@endsection
