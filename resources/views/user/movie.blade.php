@extends('layout.layout_user_movie')
@section('content')
    <form action="{{ route('UsergetSpecificMovie') }}" method="POST" class="input-group mt-3 mb-4 w-100">
        @csrf
        <input type="search" name="search" class="form-control border border-secondary rounded-start" placeholder="Type name of movie"
            aria-label="Input Movies'name" aria-describedby="basic-addon2" required>
        <button type="submit" class="btn btn-danger z-0 shadow-on-hover py-2">
            <img src="{{ asset('icons/Search_Material.svg') }}" id="login-icon" alt="">Search</button>
    </form>
    @foreach ($movies as $movie)
        <div
            class="col-xl-12 col-6 col-md-10 px-0 container-fluid container-poster d-flex flex-column align-items-center justify-content-center w-auto movie-border shadow-on-hover-dark">
            <img class="img-fluid poster-size object-fit-fill shadow" src="{{ $movie->poster_url }}">
            <p class="text-center text-dark fw-semibold mt-2 mb-0">{{ $movie->title }}</p>
            <p class="text-center text-dark mb-2 ">Release Date : {{ $movie->release_date }}</p>
            <div class="btn button-order shadow-on-hover-dark mb-2">
                <a class=" text-decoration-none text-light"
                    href="{{ route('UserDetailMovies', ['id' => $movie->id]) }}">Order Ticket</a>
            </div>
        </div>
    @endforeach
    </div>
@endsection
