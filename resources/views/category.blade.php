@extends('layout')

@section('content')
    <div class = "title">
        <h3>
            {{ $cat->name }}
        </h3>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 catalog">
        @forelse($cat->book as $current)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('storage/Image/'.$current->image) }}" class="card-img-top book-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $current->title }}</h5>
                        <h6>By</h6>
                        <h5 class="card-title">{{ $current->author }}</h5>
                        <button class="btn btn-primary w-100" onclick="location.href='{{url('detail',['id' => $current->id])}}'">
                            Detail</button>
                    </div>
                </div>
            </div>
        @empty
            <p>EMPTY</p>
        @endforelse
    </div>
@endsection
