@extends('layout')

@section('content')
{{--    <section class="jumbotron text-center">--}}
        <div class="container pt-5">
            <h1>Contact {{ env('APP_NAME') }}</h1>
            <form class="col-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <textarea class="form-control" name="message"></textarea>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Subscribe to {{ env('APP_NAME') }}' newsletter</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
{{--    </section>--}}
@endsection
