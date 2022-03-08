<div class="card mb-2">
    <div class="card-body">
        <a href="" style="color:black">
            <i class="fa-solid fa-trash" ></i>
        </a>
        <a href="{{ route('posts.edit', $post->id) }}" style="color:black">
            <i class="fa-solid fa-pencil"></i>
        </a>
        <h5 class="card-title" style="color:black">{{ $user->name}}</h5>
        <h6 class="card-subtitle mb-2 text-muted" style="color:black">{{ $post->created_at->diffForHumans() }}</h6>
        <p class="card-text" style="color:black">{{ $post->content }}</p>
    </div>
</div>
