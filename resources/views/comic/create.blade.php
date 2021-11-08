@extends('layouts.app')

@section('title', 'Add Comic')

@section('main-access')
    <form action="{{ route('comic.store') }}" method="POST">
        @csrf
        {{-- <label for="info">informazioni</label> --}}
        <input type="text" name="title" id="title" placeholder="title">
        <input type="text" name="thumb" id="thumb" placeholder="thumb">
        <input type="text" name="description" id="description" placeholder="description">
        <input type="text" name="price" id="price" placeholder="price">
        <input type="text" name="series" id="series" placeholder="series">
        <input type="text" name="sales_date" id="sales_date" placeholder="sales_date">
        <input type="text" name="type" id="type" placeholder="type">
        <button type="submit">submit</button>
    </form>
@endsection
