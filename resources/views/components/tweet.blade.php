<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $tweet->text }}</h5>
        <p>posted at: {{ $tweet->created_at->format('d.m.Y') }}</p>
        @if(Route::currentRouteName() !== 'tweet.show')
            <a href="{{ route('tweet.show', $tweet->id) }}" class="btn btn-sm btn-primary">View</a>
        @endif
        <a href="{{ route('tweet.edit', $tweet->id) }}" class="btn btn-sm btn-secondary">Edit</a>
        <form action="{{ route('tweet.delete', $tweet->id) }}" method="post" class="d-inline-block">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </div>
</div>
