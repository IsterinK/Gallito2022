@extends('layouts.app')

@section('content')

<div class="container">
    <h4>Usuarios registrados</h4>

    @forelse ($users as $user)
        @include('users.subview-user')
    @empty
        <div class="alert alert-info">
            <h5>No hay usuarios registrados en la plataforma</h5>
        </div>
    @endforelse
</div>

@endsection
