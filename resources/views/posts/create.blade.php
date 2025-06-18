@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Post</h1>

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <label>Title:</label>
            <input type="text" name="title"><br><br>

            <label>Content:</label><br>
            <textarea name="body" rows="5" cols="40"></textarea><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
