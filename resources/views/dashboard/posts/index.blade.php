@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

<div class="table-responsive">
   <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create</a>
<table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Points</th>
            <th>Points</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $posts as $post )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td><a href="/dashboard/posts/{{ $post->slug }}"><button type="submit" class="badge bg-dark"><i class="bi bi-box-arrow-right"></i>View</button></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="badge bg-dark border-0" onclick="return confirm('Ingin menghapus data ?')">hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
        <!-- and so on... -->
    </tbody>
</table>
</div>
  @endsection
