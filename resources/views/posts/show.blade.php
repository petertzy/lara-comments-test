@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Post Title -->
    <h1 class="mb-3">{{ $post->title }}</h1>
    <p class="lead">{{ $post->body }}</p>

    <!-- Comments Section -->
    <div class="mt-5">
        <h4 class="mb-3">Comments:</h4>

        @forelse($post->comments as $comment)
            <div class="border rounded p-3 mb-3 bg-light">
                <strong>{{ $comment->commenter->name ?? 'Anonymous' }}</strong>
                <p class="mb-0">{{ $comment->comment }}</p>
            </div>
        @empty
            <p class="text-muted">No comments yet.</p>
        @endforelse
    </div>

    <!-- Comment Form -->
    @auth
        <div class="mt-4">
            <h5 class="mb-3">Leave a Comment</h5>
            <form method="POST" action="{{ route('comments.store') }}">
                @csrf
                <input type="hidden" name="commentable_encrypted_key" value="{{ $post->getEncryptedKey() }}">

                <div class="mb-3">
                    <textarea name="message" class="form-control" rows="4" placeholder="Write your comment here..." required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Post Comment</button>
            </form>
        </div>
    @else
        <p class="mt-4">You must <a href="{{ route('login') }}">log in</a> to comment.</p>
    @endauth
</div>
@endsection
