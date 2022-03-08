<div class="card mb-2">
    <div class="card-body">
        <a href="{{ route('posts.edit', $post->id) }}" style="color:black" class="btn btn-info">
            <i class="fa-solid fa-pencil"></i>
        </a>

        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
            {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                'type' => 'submit',
                'tittle' => 'Remover post',
                'class' => 'btn btn-danger',
                'onclick' => 'return confirm("¿Está seguro de querer eliminar este post?")'
            ]) !!}
        {!! Form::close() !!}

        <h5 class="card-title" style="color:black">{{ $user->name}}</h5>
        <h6 class="card-subtitle mb-2 text-muted" style="color:black">{{ $post->created_at->diffForHumans() }}</h6>
        <p class="card-text" style="color:black">{{ $post->content }}</p>
    </div>
</div>
