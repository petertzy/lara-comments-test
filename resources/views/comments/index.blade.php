<h1>所有评论</h1>

@if($comments->isEmpty())
    <p>没有评论</p>
@else
    <ul>
    @foreach($comments as $comment)
        <li>{{ $comment->commenter->name ?? '匿名' }}: {{ $comment->comment }}</li>
    @endforeach
    </ul>
@endif
