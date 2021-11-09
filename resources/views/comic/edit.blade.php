@extends('layouts.app')

@section('title', 'Edit Comic')

@section('main-access')
    <form action="{{ route('comic.update', $comic->id) }}" method="POST">
        @method('PATCH')
        @csrf
        {{-- <label for="info">informazioni</label> --}}
        <input type="text" name="title" id="title" placeholder="title" value="{{ $comic->title }}">
        <input type="text" name="thumb" id="thumb" placeholder="thumb" value="{{ $comic->thumb }}">
        <input type="text" name="description" id="description" placeholder="description" value="{{ $comic->description }}">
        <input type="text" name="price" id="price" placeholder="price" value="{{ $comic->price }}">
        <input type="text" name="series" id="series" placeholder="series" value="{{ $comic->series }}">
        <input type="text" name="sales_date" id="sales_date" placeholder="sales_date" value="{{ $comic->sales_date }}">
        <input type="text" name="type" id="type" placeholder="type" value="{{ $comic->type }}">
        <button type="submit">edit</button>
    </form>
@endsection
