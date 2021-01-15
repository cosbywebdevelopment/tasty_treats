@extends('layout')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">A big thanks from {{ env('APP_NAME') }}</h1>
            <p>We will be in contact soon!</p>
            <a href="{{ route('welcome') }}" class="btn btn-primary my-2">{{ env('APP_NAME') }} Shop</a>
            <a href="{{ route('welcome') }}" class="btn btn-secondary my-2">Home</a>
        </div>
    </section>

    <script>
        setInterval(function(){ window.location.href = "{{ route('inquiry.index') }}"; }, 3000);
    </script>


@endsection
