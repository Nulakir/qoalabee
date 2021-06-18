@extends('layouts.app')

@section('content')

<div class="uk-section uk-section-medium">
    <div class="uk-container">
      <div class="uk-grid uk-child-width-expand">
      
        <div class="uk-width-1-3">
          <div class="uk-section">
            <p class="uk-text-meta uk-text-primary uk-text-uppercase">
              Step 3
            </p>
            <div class="uk-light">
              <h1 class="uk-heading-small">
                Find your match
              </h1>
              <p class="uk-text-lead">
                We've collected a bunch of rooms as well as individuals sharing the same interests.
              </p>
            </div>
            <div id="matchPeople" class="uk-light" uk-margin>
              <div class="uk-card uk-card-body">
                Send them a request to form a group yourself!
              </div>
              <div class="uk-card uk-card-body">
                There are no people available in your local area! :(
              </div>
              <div class="uk-hidden">
                <div class="uk-card uk-card-body">
                  Cornelius Bright
                </div>
                <div class="uk-card uk-card-body">
                  Cornelius Bright
                </div>
                <div class="uk-card uk-card-body">
                  Catherine Woodward
                </div>
                <div class="uk-card uk-card-body">
                  Kaiya Ellis
                </div>
                <div class="uk-card uk-card-body">
                  Jamison Bradford
                </div>
                <div class="uk-card uk-card-body">
                  Deshawn Gates
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="uk-child-width-1-2 uk-grid-medium" uk-grid="masonry: true">
            <div>
              <div class="uk-card uk-card-default">
                <div class="uk-card-media-top uk-inline">
                  <div class="uk-card-badge uk-label">POPULAR</div>
                  <img src="https://images.unsplash.com/photo-1514884025921-b2fcdef84707?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="">
                  <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                    <p>Skydiving</p>
                  </div>
                </div>
                <div class="uk-card-body">
                Meet new people during the most extreme activity, enjoy an adrenaline kick together and enjoy your jump!
                </div>
                <div class="uk-card-footer">
                  <button uk-toggle href="#roomModal" class="uk-button uk-button-text">Read more</button>
                </div>
              </div>
            </div>
            <div>
              <div class="uk-card uk-card-default">
                <div class="uk-card-media-top uk-inline uk-cover-container">
                  <div class="uk-card-badge uk-label uk-label-danger">UNAVAILABLE</div>
                  <img style="-webkit-filter: grayscale(1);" src="https://images.unsplash.com/photo-1501554728187-ce583db33af7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="" uk-cover>
                  <canvas width="500" height="500"></canvas>
                  <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                    <p>Hiking</p>
                  </div>
                </div>
                <div class="uk-card-body">
                Enjoy a beautiful view of the mountains while meeting new people who also like to hike. An effective way to meet new people and get healthy! 
                </div>
                <div class="uk-card-footer">
                  <button uk-toggle href="#roomModal" class="uk-button uk-button-text" disabled>Read more</button>
                </div>
              </div>
            </div>
            <div>
              <div class="uk-card uk-card-default">
                <div class="uk-card-media-top uk-inline">
                  <div class="uk-card-badge uk-label uk-label-danger">UNAVAILABLE</div>
                  <img style="-webkit-filter: grayscale(1);" src="https://images.unsplash.com/photo-1534423861386-85a16f5d13fd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                  <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                    <p>LAN Party</p>
                  </div>
                </div>
                <div class="uk-card-body">
                Meet new people while defeating the ender dragon!
                </div>
                <div class="uk-card-footer">
                  <button uk-toggle href="#roomModal" class="uk-button uk-button-text" disabled>Read more</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection