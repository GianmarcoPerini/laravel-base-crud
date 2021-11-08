@extends('layouts.app')

@section('title', 'Index')

@section('main-access')

<div class="container">
    <div class="row row-cols-5 g-2 flex-wrap">
        @foreach ($comics as $comic)
        <div class="col p-3">
            <a href="{{ route('comic.show', $comic->id) }}"><img class="w-100" src="{{ $comic->thumb }}" alt="{{$comic->title}}"></a>
        </div>
        @endforeach
    </div>
</div>

@endsection