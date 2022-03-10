<div class="card mb-2">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-11">
                <h5 class="card-title" style="color:black">{{ $user->name}}</h5>

                <p class="card-text" style="color:black">{{ $post->content }}</p>

                <h6 class="card-subtitle mb-2 text-muted" style="color:black">{{ $post->created_at->diffForHumans() }}</h6>
            </div>

            <div class="col-sm-1">
                @if ($post->user_id == Auth::id())
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        <a href="{{ route('posts.edit', $post->id) }}" style="color:rgb(255, 255, 255)" class="btn btn-dark">
                            <i class="fa-solid fa-pencil "></i>
                        </a>
                        {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                            'type' => 'submit',
                            'tittle' => 'Remover post',
                            'class' => 'btn btn-danger float-right',
                            'onclick' => 'return confirm("¿Está seguro de querer eliminar este post?")',
                            'width' => '30px'
                        ]) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    </div>
</div>
