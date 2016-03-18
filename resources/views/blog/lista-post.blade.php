@extends('templade')

@section('content')

    @foreach($noticias as $noticia)

    <h2 class="blog-post-title"> {{ $noticia[0] }}</h2>
    <p class="blog-post-meta">{{ $noticia[1] }} by <a href="#">{{ $noticia[2] }}</a></p>

    <p>{{ $noticia[3] }}</p>
    <hr>
    <p>{{ $noticia[4] }}</p>
    <blockquote>
        <p>{{ $noticia[5] }}</p>
    </blockquote>
    <p>{{ $noticia[6] }}</p>
@endforeach

@stop