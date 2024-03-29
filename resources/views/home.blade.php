@extends('layouts.app')

@section('content')
  <div class="container_tot_post">
    <ul>
      <h1>Tutti i post:</h1>
    @forelse ($posts as $post)
        <li>
          <a href="{{ route('posts.show', $post->slug )}}">{{ $post->title }}</a>,
          di {{ $post->author }}, del {{ $post->created_at }}
          <em>
            @if (!empty($post->category))
              (<a href="{{ route('posts.category', $post->category->slug)}}">{{$post->category->name}}</a>)
            @else
              (n.a)
            @endif
          </em>
        </li>
    @empty
      <p>Non esistono post</p>
    @endforelse
    </ul>
  </div>
@endsection
