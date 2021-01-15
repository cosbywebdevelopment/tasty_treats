@extends('layout')

@section('content')

    <div class="container pt-5">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Subscription</th>
                <th scope="col">Created</th>
            </tr>
            </thead>
            <tbody>
                @foreach($inquiries as $inquiry)
                    <tr>
                        <td>{{ $inquiry->name }}</td>
                        <td>{{ $inquiry->email }}</td>
                        <td>{{ Str::limit($inquiry->message, 10) }}</td>
                        <td>{{ $inquiry->subscription ? 'yes' : 'No'}}</td>
                        <td>{{ \Carbon\Carbon::parse($inquiry->created_at)->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $inquiries->links() }}
    </div>

@endsection
