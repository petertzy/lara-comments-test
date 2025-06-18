<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>

<h3>Comments:</h3>

@foreach($post->comments as $comment)
    <div style="margin-bottom: 10px;">
        <strong>{{ $comment->commenter->name ?? 'Anonymous' }}</strong>: {{ $comment->comment }}
    </div>
@endforeach

@if(auth()->check())
    <form method="POST" action="{{ route('comments.store') }}">
        @csrf
        <input type="hidden" name="commentable_encrypted_key" value="{{ $post->getEncryptedKey() }}">
        <textarea name="message" required placeholder="Write your comment here..." rows="4" cols="50"></textarea>
        <br>
        <button type="submit">Post Comment</button>
    </form>
@else
    <p>You must <a href="{{ route('login') }}">log in</a> to comment.</p>
@endif
