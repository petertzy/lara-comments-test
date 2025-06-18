@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div style="display: flex; align-items: center; border-bottom: 1px solid #ddd; padding: 10px 0;">
                
                <!-- Post title -->
                <div style="min-width: 12vw;">
                    <a href="{{ url('/posts/' . $post->id) }}" style="font-weight: bold; text-decoration: none;">
                        {{ $post->title }}
                    </a>
                </div>

                @auth
                    <!-- Buttons -->
                    <div style="display: flex; margin-left: 6vw;">
                        <a href="{{ route('posts.edit', $post->id) }}" style="padding: 5px 10px; background-color: #0d6efd; color: white; border-radius: 4px; text-decoration: none; font-size: 0.9rem;">Edit</a>

                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding: 5px 10px; background-color: #dc3545; color: white; border: none; border-radius: 4px; font-size: 0.9rem; margin-left: 1vw;">
                                Delete
                            </button>
                        </form>
                    </div>
                @endauth
            </div>
        @endforeach
    </div>
@endsection
