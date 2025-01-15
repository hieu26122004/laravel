<div class="card mb-4">
    <!-- Header -->
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <!-- User Info -->
            <div class="d-flex align-items-center">
                <img
                    style="width: 50px"
                    class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario"
                    alt="Mario Avatar"
                />
                <div>
                    <h5 class="card-title mb-0">
                        <a href="#">{{ $idea->user->name }}</a>
                    </h5>
                </div>
            </div>
            <!-- Actions -->
            <div>
                <form
                    method="get"
                    action="{{ url('/idea/' . $idea->id . '/edit') }}"
                    style="display: inline-block"
                >
                    @csrf
                    <button class="btn btn-success btn-sm">✒</button>
                </form>
                <form
                    method="get"
                    action="{{ url('/idea', $idea->id) }}"
                    style="display: inline-block"
                >
                    @csrf
                    <button class="btn btn-success btn-sm">👁</button>
                </form>
                <form
                    method="POST"
                    action="{{ url('/idea', $idea->id) }}"
                    style="display: inline-block"
                >
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">
                        X
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="card-body">
        @if ($edit ?? false)
        <form action="{{ url('/idea/' . $idea->id) }}" method="POST">
            @csrf @method('PUT')
            <div class="row">
                <div class="mb-3">
                    <textarea
                        class="form-control"
                        id="content"
                        name="content"
                        rows="3"
                        placeholder="Write your idea here..."
                        required
                        >{{ $idea->content }}</textarea
                    >
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Update</button>
                </div>
            </div>
            @if ($errors->any())
            <div
                class="alert alert-danger alert-dismissible fade show"
                role="alert"
            >
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
        @else
        <p class="fs-6 fw-light text-muted">
            {{ $idea->content }}
        </p>
        @endif

        <!-- Additional Info -->
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6">
                    <span class="fas fa-heart me-1"></span>
                    {{ $idea->likes }}
                </a>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted">
                    <span class="fas fa-clock"></span>
                    {{ $idea->created_at }}
                </span>
            </div>
        </div>

        <!-- Comments Section -->
        @include("shared.comment_box")
    </div>
</div>
