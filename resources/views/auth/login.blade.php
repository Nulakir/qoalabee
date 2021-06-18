@extends('layouts.app', ['title' => 'Login'])

@section('content')
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-expand" uk-grid>
            <div class="uk-width-1-3">
                <div class="uk-card-header">{{ __('Login') }}</div>
                <div class="uk-card-body">
                    <form class="uk-form-stacked" method="POST" action="{{ route('login') }}" uk-margin>
                        @csrf

                        <div>
                            <label for="email" class="uk-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="uk-form-label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="form-check">
                                    <input class="uk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="uk-flex uk-flex-middle uk-flex-between">
                                <button type="submit" class="uk-button uk-button-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="uk-button uk-button-text" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="uk-card-media-right uk-cover-container">
                <img src="https://images.unsplash.com/photo-1482778090591-caf9a0149412?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1868&q=80" alt="" uk-cover>
                <canvas height="500" width="500"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
