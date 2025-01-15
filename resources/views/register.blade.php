@extends("layout.layout") @section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6">
            <form
                class="form mt-5"
                action="{{ url('/register') }}"
                method="post"
            >
                @csrf
                <h3 class="text-center text-dark">Register</h3>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                    />
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control @error('password') is-invalid @enderror"
                    />
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password_confirmation" class="form-label"
                        >Confirm Password:</label
                    >
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="form-control"
                    />
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-dark w-100">
                        Register
                    </button>
                </div>

                <div class="text-center mt-3">
                    Already have an account?
                    <a href="{{ url('/login') }}" class="text-dark"
                        >Login here</a
                    >
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
