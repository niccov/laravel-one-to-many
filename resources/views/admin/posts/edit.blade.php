@extends('layouts.admin')

@section('content')
<div class="container">

<h1>Modifca post</h1>

    <form action="{{route('admin.posts.update', $post)}}" method="POST">
        @csrf

        @method('PUT')
        <div class="mb-3">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title') ?? $post->title}}">
            @error('title')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description">Descrizione post</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">
            value="{{old('description') ?? $post->description}}"
            </textarea>
            @error('description')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="language">Linguaggio</label>
            <input type="text" name="language" id="language" class="form-control @error('language') is-invalid @enderror" value="{{old('language') ?? $post->language}}">
            @error('language')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</div>
@endsection