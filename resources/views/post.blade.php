@extends('partials.layout')
@section('content')
    @include('partials.post-card', ['full' => true])
    <h1 class="text-3xl my-5">Comments: </h1>
    <form action="{{ route('comments.store', $post) }}" method="POST" class="input-group mb-4">
        @csrf
        <input name="body" class="w-100 h-10 border px-2" type="text" placeholder="Write something" aria-label="Comment" required>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>
    @foreach ($post->comments as $comment)
        <div class="card bg-base-200 mt-2 shadow-sm">
            <div class="card-body">
                {{ $comment->body }}
                <p class="text-base-content/70">{{ $comment->user->name }}</p>
            </div>
        </div>
    @endforeach
@endsection