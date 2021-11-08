@extends('layouts.app')

@section('title', 'Index')

@section('main-access')
<div class="container">
    <div class="row g-2 flex-wrap">
        @foreach ($comics as $comic)
        <div class="col-2 p-3">
            <a href="{{ route('comic.show', $comic->id) }}"><img src="{{ $comic->thumb }}" alt="{{$comic->title}}"></a>
        </div>
        @endforeach
    </div>
</div>

@endsection