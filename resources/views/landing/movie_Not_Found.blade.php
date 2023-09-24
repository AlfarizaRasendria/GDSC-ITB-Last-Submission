@extends('layout.layout_guest_movie')
@section('content')
    <div class="main-movie-section movie-bg container-fluid overflow-x-hidden d-flex flex-column align-items-center min-vh-100">
        <a href="{{ route('getAllMovie') }}" class="btn btn-danger shadow-on-hover-dark text-decoration-none d-flex align-self-start ms-3 mb-5"><img
            src="{{ asset('icons/ArrowBack_Material.svg') }}" alt="Back Arrow Icon"><span
            class="text-light fw-bold">Back</span></a>
        @if (session('Empty'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('Empty') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif

        <form action="{{ route('getSpecificMovie') }}" method="POST" class="input-group mb-5 w-75">
            @csrf
            <input type="search" name="search" class="form-control border border-secondary py-2 rounded-start"
                placeholder="Type name of movie" aria-label="Input Movies'name" aria-describedby="basic-addon2" required>
            <button type="submit" class="btn btn-danger z-0 shadow-on-hover-dark">
                <img src="{{ asset('icons/Search_Material.svg') }}" id="login-icon" alt="">Search
            </button>
        </form>

        @if ($errors->has('error'))
            <div class="alert alert-danger alert-dismissible fade show w-50" role="alert">
                {{ $errors->first('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
    </div>
@endsection
