<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>
        @isset($title)
            {{ $title }} | 
        @endisset
        {{ config('app.name') }}
  </title>
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="qoalabee">
  <meta name="author" content="qoalabee">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="img/Naamloos.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="{{ asset('css/uikit.css') }}" rel="stylesheet">


</head>

<body>
    <div id="roomModal" class="uk-modal-full" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                <div class="uk-background-contain" style="background-image: url('https://images.unsplash.com/photo-1514884025921-b2fcdef84707?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');" uk-height-viewport></div>
                <div class="uk-padding-large">
                    <div class="uk-label uk-background-secondary">
                      <span id="room-activity">0</span>
                      people have joined the activity
                    </div>
                    <h1>Skydiving</h1>
                    <p>Skydiving includes free falling (usually from an aeroplane) through the air prior to opening a parachute. Typically skydives are carried out from around 4,000m (or 12,500ft) offering 40 to 50 seconds of freefall time. Longer free fall times can be achieved by exiting an aircraft at altitudes much higher than 4,000m, but such jumps require pressurized oxygen within the aircraft as well as bottled oxygen for very high skydives. During a skydive, total freedom and control of the air can be enjoyed as well as many complex and spectacular manoeuvres including flat turns, somersaults and formation skydiving. Skydiving can be enjoyed either as an individual - doing solo(alone) jumps - or as part of a team carrying out formation skydiving. Generally, the term ‘skydive’ refers to the time spent in freefall from exiting an aircraft to deploying a parachute but skydiving does include some disciplines such as accuracy landings and canopy formation flying which concentrate on the time spent once a canopy has been deployed.</p>
                    <p class="uk-text-right">
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                        <button class="uk-button uk-button-primary" onclick="increaseActivity();" type="button" id="join-button">Join</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
  
    <div class="uk-container">
      <div class="uk-light">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
              <span>
                  <a href="{{ url('/') }}" class="page_logo uk-link-reset uk-text-lead uk-text-primary uk-margin-remove">
                      {{ config('app.name', 'Qoalabee') }}.
                  </a>
              </span>
            </div>
            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav">
                    <li><a href="/home">Interests</a></li>
                    <li><a href="/match">Match</a></li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <!-- Authentication Links -->
                    @guest
                        <li>
                            <a class="#" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a class="#" href="{{ route('register') }}">{{ __('Create profile') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a href="{{ route('profile') }}">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                  <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li>
                                </ul>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <hr>

      </div>
    </div>

  @yield('content')

  <div class="uk-section uk-section-large uk-section-secondary">
    <div class="uk-container">
      <div class="uk-light">
        <div class="uk-grid uk-grid-large uk-child-width-expand">
          <div>
            <div class="uk-margin">
              <h5 class="page_logo">{{ config('app.name', 'Qoalabee') }}.</h5>
            </div>
            <div class="uk-margin">
            QoalaBEE together for some qoalaty time.
            </div>
          </div>
          <div>
            <div class="uk-margin">
              <h5 class="uk-h5">Legal</h5>
            </div>
            <div class="uk-margin">
              <div class="uk-list">
                <li><a href="javascript:void(0)" class="uk-link-muted">Privacy</a></li>
                <li><a href="javascript:void(0)" class="uk-link-muted">Terms of Use</a></li>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-margin">
              <h5 class="uk-h5">About</h5>
            </div>
            <div class="uk-margin">
              <div class="uk-list">
                <li><a href="javascript:void(0)" class="uk-link-muted">Blog</a></li>
                <li><a href="javascript:void(0)" class="uk-link-muted">Safety</a></li>
                <li><a href="javascript:void(0)" class="uk-link-muted">Meet the team</a></li>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-margin">
              <h5 class="uk-h5">Contact us</h5>
            </div>
            <div class="uk-margin">
              info@qoalabee.com
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/uikit.min.js') }}"></script>
  <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
  <script src="{{ asset('js/qoalabee.js') }}"></script>
</body>

</html>