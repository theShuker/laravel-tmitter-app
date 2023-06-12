@extends('layouts.main')

@section('content')
    <div>
        @foreach($tweets as $tweet)
            <x-tweet :$tweet />
        @endforeach
    </div>
@endsection
