@extends('dashboard.layouts.main')

@section('container')
<div class="row justify-content-cneter mb-5">
    <div class="col-lg-8">
        <h1 class="mb-3">{{ $post->title }}</h1>

        <p>By. <a href="/posts?authors-{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
            in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
            class="img-fluid">

            @else
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}"
            class="img-fluid">

            @endif


        <article class="my-3 fs-5">
            {!! $post->body !!}
        </article>

         <a href="/dashboard/posts" class="btn btn-dark">
         Back to menu
        </a>

         <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-dark">
            Ubah
        </a>

         <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline ">
            @method('delete')
            @csrf
            <button  class="btn bg-dark" onclick="return confirm('Ingin menghapus data ?')">Hapus</button>
        </form>
  @endsection
