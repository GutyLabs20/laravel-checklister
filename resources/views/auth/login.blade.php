@extends('layouts.auth')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body"> --}}

    {{-- </div>
            </div>
        </div>
    </div>
</div> --}}
    <div class="d-table-cell align-middle">

        <div class="text-center mt-4">
            <h1 class="h2">{{ __('Welcome') }}</h1>
            {{-- <p class="lead">
                Sign in to your account to continue
            </p> --}}
        </div>

        <div class="card">
            <div class="card-body">
                <div class="m-sm-4">
                    <div class="text-center">
                        <img src="{{asset('img/avatar-siete.jpg')}}" alt="Charles Hall" class="img-fluid rounded-circle mb-5" width="132"
                            height="132" />
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group mb-3">
                            {{-- <label class="form-label">{{ __('Email Address') }}</label> --}}
                            <span class="input-group-text" id="basic-addon1">
                                <i class="align-middle" data-feather="mail"></i>
                            </span>
                            <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Enter your') }} {{ __('Email Address') }}" />
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-group mb-3">
                            {{-- <label class="form-label">{{ __('Password') }}</label> --}}
                            <span class="input-group-text" id="basic-addon1">
                                <i class="align-middle" data-feather="lock"></i>
                            </span>
                            <input class="form-control form-control-lg" type="password" id="password" name="password" required autocomplete="current-password" placeholder="{{ __('Enter your') }} {{ __('Password') }}" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-lg btn-primary">
                                <i class="align-middle" data-feather="log-in"></i>
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
