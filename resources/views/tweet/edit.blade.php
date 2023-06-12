@extends('layouts.main')
@section('content')
    <div>
        <h1>Editing tweet with id {{$tweet->text}}</h1>
        <form action="{{ route('tweet.update', $tweet->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="tweetText" class="form-label">Ur message to the world</label>
                <textarea class="form-control" id="tweetText" name="text" rows="3" placeholder="type here">{{$tweet->text}}</textarea>
            </div>

            <input type="submit" value="Save changes" class="btn btn-success">
        </form>
    </div>
@endsection
