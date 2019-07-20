@extends('layouts.app')

@section('content')
  <div class="container_tot_post">
    <ul>
      <h1>Tutti i post:</h1>
    @forelse ($posts as $post)
        <li>
          <a href="{{ route('posts.show', $post->slug )}}">{{ $post->title }}</a>,
          di {{ $post->author }}, del {{ $post->created_at }}
        </li>
    @empty
      <p>Non esistono post</p>
    @endforelse
    </ul>
  </div>
@endsection
