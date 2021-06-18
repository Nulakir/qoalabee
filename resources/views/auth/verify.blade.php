@extends('layouts.app', ['title' => 'Verify'])

@section('content')
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-child-width-expand">
            <div class="uk-width-1-3">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">{{ __('Register') }}</div>
                    <div class="uk-card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                    </div>
                </div>
            </div>
            <div></div>
        </div>
    </div>
</div>
@endsection
