<form action="{{ url('/idea/'.$idea->id.'/comment') }}" method="POST">
    @csrf

    <!-- Comment Input -->
    <div class="mb-3">
        <textarea
            class="fs-6 form-control"
            name="content"
            rows="1"
            placeholder="Write a comment..."
            required
        ></textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-primary btn-sm">
            Post Comment
        </button>
    </div>

    <hr />
    @if($idea->comments->isEmpty())
    <p>No comments yet.</p>
    @endif
    <!-- Single Comment -->
    @foreach ($idea->comments as $comment)
    <div class="d-flex align-items-start">
        <img
            style="width: 35px"
            class="me-2 avatar-sm rounded-circle"
            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
            alt="Luigi Avatar"
        />
        <div class="w-100">
            <div class="d-flex justify-content-between">
                <h6 class="mb-0">fhaoh</h6>
                <small class="fs-6 fw-light text-muted">
                    {{ $comment->created_at }}
                </small>
            </div>
            <p class="fs-6 mt-3 fw-light">
                {{ $comment->content }}
            </p>
        </div>
    </div>
    @endforeach
</form>
