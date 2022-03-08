@extends('layouts.app')

@section('content')}
    <div class="container">
        <h1>Crear publicación</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(['route' => 'posts.store', 'method'=>'post']) !!}
            <form>
                @include('posts.subview-posts-fields')
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        {!! Form::close() !!}
    </div>
@endsection
