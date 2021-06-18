@extends('layouts.app', ['title' => 'Register'])

@section('content')
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-expand" uk-grid>
            <div class="uk-width-1-3">
                <div class="uk-card-header">{{ __('Register') }}</div>
                <div class="uk-card-body">
                    <form class="uk-form-stacked" method="POST" action="{{ route('register') }}" uk-margin>
                        @csrf

                        <div>
                            <label for="name" class="uk-form-label">{{ __('Name') }}</label>

                            <div class="uk-form-controls">
                                <input id="name" type="text" class="uk-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email" class="uk-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="uk-form-controls">
                                <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="uk-form-label">{{ __('Password') }}</label>

                            <div class="uk-form-controls">
                                <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password-confirm" class="uk-form-label">{{ __('Confirm Password') }}</label>

                            <div class="uk-form-controls">
                                <input id="password-confirm" type="password" class="uk-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div>
                            <div class="uk-text-right">
                                <button type="submit" class="uk-button uk-button-primary">
                                    {{ __('Register') }}
                                </button>
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
