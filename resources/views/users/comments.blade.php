@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Comments by {{ $user->name }}</h2>

    @forelse($comments as $comment)
        <div class="border rounded p-3 mb-3">
            <p>{{ $comment->comment }}</p>
            <p class="text-muted">
                On: 
                @if ($comment->commentable)
                    <a href="{{ route('posts.show', $comment->commentable->id) }}">
                        {{ class_basename($comment->commentable) }} #{{ $comment->commentable->id }}
                    </a>
                @else
                    (Deleted item)
                @endif
            </p>
        </div>
    @empty
        <p class="text-muted">This user has not posted any comments.</p>
    @endforelse
</div>
@endsection
