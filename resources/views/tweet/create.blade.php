@extends('layouts.main')
@section('content')
    <div>
        <h1>Create new tweet</h1>
        <form action="{{ route('tweet.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tweetText" class="form-label">Ur message to the world</label>
                <textarea class="form-control" id="tweetText" name="text" rows="3" placeholder="type here"></textarea>
            </div>

            <input type="submit" value="Send" class="btn btn-success">
        </form>
    </div>
@endsection
