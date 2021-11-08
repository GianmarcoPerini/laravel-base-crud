@extends('layouts.app')

@section('main-access')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img class="w-50" src="{{$comic->thumb}}" alt="">
            </div>
            <div class="col-6">
                <p>{{ $comic->title }}</p>
                <p>{{ $comic->description }}</p>
                <p>{{ $comic->series }}</p>
                <p>{{ $comic->sales_date }}</p>
                <p>{{ $comic->type }}</p>
                <div class="d-flex justify-content-between bg-success mt-4 p-2 fs-6 fw-bold">
                    <p class="m-0 ps-4">price: <span class="text-white">{{ $comic->price }} $</span></p>
                    <p class="m-0 text-white pe-4">check avability</p>
                </div>
            </div>
            
        </div>
        
    </div>
@endsection