@extends('layout.layout_user_movie')
@section('content')
    <div class="container-fluid overflow-x-hidden d-flex flex-column align-items-center min-vh-100">
        <a href="{{ route('UserAllMovies') }}" class="btn btn-danger shadow-on-hover-dark text-decoration-none d-flex align-self-start ms-3 mb-5"><img
            src="{{ asset('icons/ArrowBack_Material.svg') }}" alt="Back Arrow Icon"><span
            class="text-light fw-bold">Back</span></a>
        @if (session('Empty'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('Empty') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif

        <form action="{{ route('UsergetSpecificMovie') }}" method="POST" class="input-group mb-5 w-75">
            @csrf
            <input type="search" name="search" class="form-control border border-secondary py-2"
                placeholder="Type name of movie" aria-label="Input Movies'name" aria-describedby="basic-addon2" required>
            <button type="submit" class="btn btn-danger z-0 shadow-on-hover">
                <img src="{{ asset('icons/Search_Material.svg') }}" id="login-icon" alt="">Search
            </button>
        </form>

        <div class="px-0 row mx-0 gap-4">
            @foreach ($specific_movies as $specific_movie)
                <div href="#"
                    class="col-xl-12 col-6 col-md-10 px-0 container-fluid d-flex flex-column container-poster align-items-center justify-content-center gap-2 w-auto movie-border shadow-on-hover-dark">
                    <img class="img-fluid poster-size object-fit-fill shadow" src="{{ $specific_movie->poster_url }}">
                    <p class="text-center text-dark fw-semibold mb-2">{{ $specific_movie->title }}</p>
                    <div class="btn bg-danger shadow-on-hover mb-2">
                        <a class="text-decoration-none text-light"
                            href="{{ route('getDetailMovie', ['id' => $specific_movie->id]) }}">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
