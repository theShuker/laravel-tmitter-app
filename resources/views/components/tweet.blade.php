<div class="card mb-3">
    <div class="card-body" data-tweet-id="{{$tweet->id}}">
        <b class="mb-2 d-inline-block">{{$tweet->user->name}} tweeted:</b>
        <h5 class="card-title">{{ $tweet->text }}</h5>
        <small>posted at: {{ $tweet->created_at->format('H:i:s d.m.Y') }}</small>

        <div>
            <button onclick="toggleLike({{$tweet->id}}, this)" class="like-button btn btn-outline-success mt-2 mb-3">💖 (<span class="like-button-counter">{{ $tweet->likes()->count() }}</span>)</button>
        </div>

        <div>
            @if(Route::currentRouteName() !== 'tweet.show')
                <a href="{{ route('tweet.show', $tweet->id) }}" class="btn btn-sm btn-primary">View</a>
            @endif

            @if(Auth::id() === $tweet->user->id)
                <a href="{{ route('tweet.edit', $tweet->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                <form action="{{ route('tweet.delete', $tweet->id) }}" method="post" class="d-inline-block">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            @endif
        </div>
    </div>
</div>
