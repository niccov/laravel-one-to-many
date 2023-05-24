@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="py-3">
        <h1>Visualizzazione post</h1>

        <hr>

        <h2>{{$post->title}}</h2>

        <br>

        <h4>{{$post->slug}}</h4>

        <br>

        <p>{{$post->description}}</p>
    </div>

    <div class="d-flex justify-content-around">
        <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-primary">Modifica post</a>
        
        <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
            @csrf

            @method('DELETE')
          <button type="submit" class="btn btn-danger">Elimina post</button>
        </form>
    </div>
</div>
@endsection