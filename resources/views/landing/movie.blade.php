@extends('layout.layout_guest_movie')
@section('content')
    <div class="main-movie-section movie-bg container-fluid overflow-x-hidden d-flex flex-column align-items-center">
        <form action="{{ route('getSpecificMovie') }}" method="POST" class="input-group mb-5 mt-3 w-75">
            @csrf
            <input type="search" name="search" class="form-control border border-secondary z-0 py-2 rounded-start"
                placeholder="Type name of movie" aria-label="Input Movies'name" aria-describedby="basic-addon2" required>
            <button type="submit" class="btn btn-danger z-0 shadow-on-hover-dark">
                <img src="{{ asset('icons/Search_Material.svg') }}" id="login-icon" alt="">Search
            </button>
        </form>
        @if ($errors->has('error'))
            <div class="alert alert-danger alert-dismissible fade show w-75" role="alert">
                {{ $errors->first('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
        <div class="px-0 row mx-0 gap-4 mt-4">
            @foreach ($movies as $movie)
                <div
                    class="col-xl-12 col-6 col-md-10 px-0 container-fluid d-flex flex-column container-poster align-items-center justify-content-center gap-2 w-auto movie-border shadow-on-hover-dark">
                    <img class="img-fluid poster-size object-fit-fill shadow" src="{{ $movie->poster_url }}">
                    <p class="text-center text-dark fw-semibold mb-0">{{ $movie->title }}</p>
                    <p class="text-center text-dark  mb-2 ">Release Date : {{ $movie->release_date }}</p>
                    <div class="btn bg-danger shadow-on-hover mb-2">
                        <a class=" text-decoration-none text-light"
                            href="{{ route('getDetailMovie', ['id' => $movie->id]) }}">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
