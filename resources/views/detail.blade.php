@extends('layout')

@section('content')
    <div class = "title">
        <h3>
            Book Detail
        </h3>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 catalog">
        <div class="col w-100">
            <div class="card h-100">
                <img src="{{ asset('storage/Image/'.$bk->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Title: {{ $bk->title }}</h5>
                    <h5 class="card-title">Author: {{ $bk->author }}</h5>
                    <h5 class="card-title">Publisher: {{ $bk->publisher->name }}</h5>
                    <h5 class="card-title">Year: {{ $bk->year }}</h5>
                    <h5 class="card-title">Synopsis: </h5>
                    <h5 class="card-text">{{ $bk   ->synopsis }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
