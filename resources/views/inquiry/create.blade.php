@extends('layout')

@section('content')
{{--    <section class="jumbotron text-center">--}}
        <div class="container pt-5">
            <h1>Contact {{ env('APP_NAME') }}</h1>
            <form class="col-6" action="{{ route('inquiry.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') border-danger @enderror" id="name" name="name">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                    @error('name')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control @error('email') border-danger @enderror" id="email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @error('email')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control @error('message') border-danger @enderror" name="message"></textarea>
                    @error('message')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input name="subscription" type="checkbox" class="form-check-input" id="subscription" value="1">
                    <label class="form-check-label" for="subscription">Subscribe to {{ env('APP_NAME') }}' newsletter</label>
                </div>
                <div hidden>
                    <input name="catch1" type="text">
                    <input name="catch2" type="text" value="{{ microtime(true) }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
{{--    </section>--}}
@endsection
