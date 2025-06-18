@foreach ($posts as $post)
    <h2><a href="{{ url('/posts/' . $post->id) }}">{{ $post->title }}</a></h2>
@endforeach
