@extends('layouts.app')

@section('content')

<div class="uk-section uk-section-medium">
    <div class="uk-container">
      <div class="uk-grid uk-child-width-expand">
      
        <div class="uk-width-1-3">
          <div class="uk-section">
            <p class="uk-text-meta uk-text-primary uk-text-uppercase">
              Step 1
            </p>
            <div class="uk-light">
              <h1 class="uk-heading-small">
                Create your profile
              </h1>
              <p class="uk-text-lead">
                We would love to get to know you better
              </p>
            </div>
          </div>
        </div>

        <div>
          <div class="uk-background-default">
            <div class="uk-padding uk-padding-remove-vertical">
              <div class="uk-section">
                <form class="uk-form-stacked" uk-margin>
                  <div>
                    <label class="uk-form-label">Firstname</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="profile-setup-firstname" type="text" placeholder="What's your firstname?" value="{{ Auth::user()->name }}">
                    </div>
                  </div>
                  <div>
                    <label class="uk-form-label">Lastname</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="profile-setup-lastname" type="text" placeholder="What's your lastname?">
                    </div>
                  </div>
                  <div>
                    <label class="uk-form-label">Age</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="profile-setup-age" type="number" placeholder="How old are you?">
                    </div>
                  </div>
                  <div>
                    <label class="uk-form-label">Gender</label>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="profile-setup-gender">
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                  </div>
                  <div>
                    <label class="uk-form-label">Description</label>
                    <div class="uk-form-controls">
                      <textarea class="uk-textarea" rows="5" placeholder="Tell us about yourself." id="profile-setup-description"></textarea>
                    </div>
                  </div>
                  <div class="uk-float-right">
                    <a href="{{ url('/home') }}" class="uk-button uk-button-primary" id="profile-setup-submit" data-user-id="{{ Auth::user()->id }}" onclick="createProfile();">Submit</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection