@extends('layout')

@section('content')

        @forelse($pb as $current)
            <div class="container-fluid publisher-container">
                <div class="row logo-container">
                    <div class="col-3">
                        <img src="{{ asset('storage/Image/'.$current->image) }}" class="card-img-top book-img" alt="...">
                    </div>
                    <div class="col-9">
                        <div class="publisher-content">Publisher Name : {{ $current->name }}</div>
                        <div class="publisher-content">Address : {{ $current->address }}</div>
                        <div class="publisher-content">Phone : {{ $current->phone }}</div>
                        <div class="publisher-content">Email : {{ $current->email }}</div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 catalog">
                @foreach($current->book as $bk)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/Image/'.$bk->image) }}" class="card-img-top book-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bk->title }}</h5>
                            <h6>By</h6>
                            <h5 class="card-title">{{ $bk->author }}</h5>
                            <button class="btn btn-primary w-100" onclick="location.href='{{url('detail',['id' => $bk->id])}}'">
                                Detail</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @empty
            <p>EMPTY</p>
        @endforelse

@endsection

