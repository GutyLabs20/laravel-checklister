@extends('layouts.auth')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> --}}

    {{-- </div>
        </div>
    </div>
</div> --}}

    <div class="d-table-cell align-middle">

        <div class="text-center mt-4">
            <h1 class="h2">{{ __('Register') }}</h1>
            {{-- <p class="lead">
                Start creating the best possible user experience for you customers.
            </p> --}}
        </div>

        <div class="card">
            <div class="card-body">
                <div class="m-sm-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">{{ __('Name') }}</label>
                            <input class="form-control form-control-lg @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ __('Email Address') }}</label>
                            <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email" />
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ __('Password') }}</label>
                            <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" id="password" name="password" required autocomplete="new-password" placeholder="Enter password" />
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ __('Confirm Password') }}</label>
                            <input class="form-control form-control-lg" type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password" />
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-lg btn-primary">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
