@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create</h1>
</div>

    <div class="col=lg-8">
        <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid
                @enderror" id="title" name="title" value="{{ old('title') }}">

                @error('title')
                    <div class="is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">
                    Slug
                </label>

                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" disable readonly >
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">
                    Category
                </label>

                <select class="form-select" name="category_id" >
                    @foreach ( $categories as $category )

                    @if (old('category_id')== $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name}}</option>

                    @else
                        <option value="{{ $category->id }}" d>{{ $category->name}}</option>

                    @endif

                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label mt-5">
                    Gambar
                </label>

                <img class="img-preview img-fluid col-sm-5 mb-3 ">
                <input class="form-control @error('image') is-invalid
                @enderror" type="file" id="image" name="image" onchange="previewImage()">

                @error('image')
                    <div class="is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">
                    Body
                </label>

                    <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" cols="30" rows="7" value="{{ old('body') }}">
                    </textarea>
                    {{-- <input type="text" class="form-control @error('body') is-invalid
                    @enderror" id="body" name="body" value="{{ old('body') }}"> --}}
            </div>
                @error('body')
                    <div class="is-invalid">
                        {{ $message }}
                    </div>
                @enderror

            <button type="submit" class="btn btn-primary">Buat</button>
        </form>
    </div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
    });

    // menampilkan image (preview)
    function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }

}
</script>
@endsection
