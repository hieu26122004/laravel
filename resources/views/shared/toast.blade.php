@foreach (['success', 'fail', 'warning', 'info'] as $type)
    @if (session()->has($type))
        <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
            {{ session($type) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endforeach
