@extends('layouts.app')

@section('content')
<div class="uk-section uk-section-medium">
    <div class="uk-container">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <div class="uk-child-width-1-3 uk-grid-medium" uk-grid="masonry: true">
          <div class="uk-width-1-3">
            <div class="uk-section">
              <p class="uk-text-meta uk-text-primary uk-text-uppercase">
                Step 2
              </p>
              <div class="uk-light">
                <h1 class="uk-heading-small">
                  Time to collect your interests!
                </h1>
                <p class="uk-text-lead">
                  Based on your interests we'll bundle you together with others you'll get along with.
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-card uk-card-default uk-card-hover" data-category="Sports" data-selected="0">
              <div class="uk-card-media-top uk-inline">
                <div class="uk-card-badge uk-label uk-label-primary">SELECTED</div>
                <img
                  src="https://images.unsplash.com/photo-1514884025921-b2fcdef84707?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
                  alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-top">
                  <p>Sports</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-card uk-card-default uk-card-hover" data-category="Music" data-selected="0">
              <div class="uk-card-media-top uk-inline uk-cover-container">
                <div class="uk-card-badge uk-label uk-label-primary">SELECTED</div>
                <img
                  src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                  alt="" uk-cover>
                <canvas width="500" height="500"></canvas>
                <div class="uk-overlay uk-overlay-primary uk-position-top">
                  <p>Music</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-card uk-card-default uk-card-hover" data-category="Food" data-selected="0">
              <div class="uk-card-media-top uk-inline">
                <div class="uk-card-badge uk-label uk-label-primary">SELECTED</div>
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                  alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-top">
                  <p>Food</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-card uk-card-default uk-card-hover" data-category="Traveling" data-selected="0">
              <div class="uk-card-media-top uk-inline">
                <div class="uk-card-badge uk-label uk-label-primary">SELECTED</div>
                <img
                  src="https://images.unsplash.com/photo-1503899036084-c55cdd92da26?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                  alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-top">
                  <p>Traveling</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-card uk-card-default uk-card-hover" data-category="Gaming" data-selected="0">
              <div class="uk-card-media-top uk-inline uk-cover-container">
                <div class="uk-card-badge uk-label uk-label-primary">SELECTED</div>
                <img
                  src="https://images.unsplash.com/photo-1534423861386-85a16f5d13fd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
                  alt="" uk-cover>
                <canvas width="500" height="500"></canvas>
                <div class="uk-overlay uk-overlay-primary uk-position-top">
                  <p>Gaming</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-card uk-card-default uk-card-hover" data-category="Fashion" data-selected="0">
              <div class="uk-card-media-top uk-inline">
                <div class="uk-card-badge uk-label uk-label-primary">SELECTED</div>
                <img
                  src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                  alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-top">
                  <p>Fashion</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-card uk-card-default uk-card-hover" data-category="Art" data-selected="0">
              <div class="uk-card-media-top uk-inline">
                <div class="uk-card-badge uk-label uk-label-primary">SELECTED</div>
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Last_Judgement_%28Michelangelo%29.jpg/800px-Last_Judgement_%28Michelangelo%29.jpg"
                  alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-top">
                  <p>Art</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-card uk-card-default uk-card-hover" data-category="Nature" data-selected="0">
              <div class="uk-card-media-top uk-inline uk-cover-container">
                <div class="uk-card-badge uk-label uk-label-primary">SELECTED</div>
                <img
                  src="https://images.unsplash.com/photo-1433086966358-54859d0ed716?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                  alt="" uk-cover>
                <canvas width="500" height="500"></canvas>
                <div class="uk-overlay uk-overlay-primary uk-position-top">
                  <p>Nature</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-card uk-card-default uk-card-hover" data-category="Film" data-selected="0">
              <div class="uk-card-media-top uk-inline">
                <div class="uk-card-badge uk-label uk-label-primary">SELECTED</div>
                <img
                  src="https://cdn.pixabay.com/photo/2013/02/26/01/10/florida-state-university-86197_960_720.jpg"
                  alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-top">
                  <p>Film</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-card uk-card-default uk-card-hover" data-category="Shopping" data-selected="0">
              <div class="uk-card-media-top uk-inline uk-cover-container">
                <div class="uk-card-badge uk-label uk-label-primary">SELECTED</div>
                <img
                  src="https://images.unsplash.com/photo-1532795986-dbef1643a596?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80"
                  alt="" uk-cover>
                <canvas width="500" height="500"></canvas>
                <div class="uk-overlay uk-overlay-primary uk-position-top">
                  <p>Shopping</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-card uk-card-body uk-card-default uk-text-center">
              <a href="{{ route('match') }}" class="uk-button uk-button-primary" id="interests-submit" data-user-id="{{ Auth::user()->id }}" onclick="createInterestsProfile();">Ready? Next</a>
            </div>
          </div>
        </div>

        
    </div>
  </div>
@endsection
