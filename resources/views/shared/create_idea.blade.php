<form action="{{ url('/idea') }}" method="POST">
    @csrf
    <h4>Share your ideas</h4>
    <div class="row">
        <div class="mb-3">
            <label for="idea" class="form-label">Your Idea</label>
            <textarea
                class="form-control"
                id="idea"
                name="idea"
                rows="3"
                placeholder="Write your idea here..."
                required
            ></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-dark">Share</button>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
    </div>
    @endif
</form>
