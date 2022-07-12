@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts categories</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

<div class="table-responsive">
   <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create category</a>
<table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $categories as $category )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td><a href="/dashboard/categories/{{ $category->slug }}"><button type="submit" class="badge bg-dark"><i class="bi bi-box-arrow-right"></i>View</button></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit"><button type="submit" class="badge bg-dark"><i class="bi bi-box-arrow-right"></i>ubah</button></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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
