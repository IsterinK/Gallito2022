@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3">
            <center>
                <img src="https://st2.depositphotos.com/4257363/10336/v/600/depositphotos_103360876-stock-illustration-abstract-vector-rooster-with-red.jpg" width="150">
            </center>
            <div class="card-body">
              <center>
                <h1 class="card-title" style="color:black">Bienvenido a Gallito</h1>
                <p class="card-text" style="color:black">El lugar perfecto para compartir tus pensamientos con diferentes usuarios al rededor del mundo</p>
              </center>
            </div>
          </div>

        @forelse ($users as $user)
            @include('users.subview-user')
        @empty
            <div class="alert alert-info">
                <h5>No hay usuarios registrados en la plataforma</h5>
            </div>
        @endforelse
    </div>
@endsection
