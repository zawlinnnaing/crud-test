@extends('layout')
@section('content')
             <div class="be-together-section mdl-typography--text-center">
          <!-- <div class="logo-font slogan">be together. not the same.</div>
          <div class="logo-font sub-slogan">welcome to android... be yourself. do your thing. see what's going on.</div> -->
          <div class="logo-font create-character">
            Some make wonder happens.<br>
            Some watch wonder happens.<br>

          </div>

          <!-- <a href="#screens">
            <button class="fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
              <i class="material-icons">expand_more</i>
            </button>
          </a> -->
        </div>
        <div class="wear-section">
          <div class="wear-band">
            <div class="wear-band-text">
              <div class="mdl-typography--font-thin">The best of Google built in</div>
              <p class="mdl-typography--font-thin">
                Android works perfectly with your favourite apps like Google Maps,
                Calendar and YouTube.
              </p>
              <p>
                <a class="mdl-typography--font-regular mdl-typography--text-uppercase alt-link" href="">
                  See what's new in the Play Store&nbsp;<i class="material-icons">chevron_right</i>
                </a>
              </p>
            </div>
          </div>
        </div>
        <!-- -->
        <div class="customized-section">
          <div class="customized-section-text">
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Announcements</div>
            <p class="mdl-typography--font-light">
              {{ $announcements->content }}
              <br>
              <a href="/previous_announcements" class="link mdl-typography--font-light">Previous Announcements</a>
            </p>
          </div>
          <div class="customized-section-image"></div>
        </div>
        <div class="more-section">
          <div class="section-title mdl-typography--display-1-color-contrast">More from Android</div>
          <div class="card-container mdl-grid">

          @foreach($posts as $post)
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
              @if($post->photos->toArray() == null)
                              <img src="images/serveimage.gif">
                              @else
                <img src="images/{{$post->photos->toArray()[0]['img_dir']}}">
                @endif
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">{{$post->title}}</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">{{$post->content}}</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Make the switch
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
            @endforeach
            <!--
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-4.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Create your own Android character</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Turn the little green Android mascot into you, your friends, anyone!</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   androidify.com
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-2.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Get a clean customisable home screen</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">A clean, simple, customisable home screen that comes with the power of Google Now: Traffic alerts, weather and much more, just a swipe away.</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Download now
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-3.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Millions to choose from</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Hail a taxi, find a recipe, run through a temple – Google Play has all the apps and games that let you make your Android device uniquely yours.</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Find apps
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div> -->

          </div>
        </div>
            @endsection
<!--     <a href="https://github.com/google/material-design-lite/blob/mdl-1.x/templates/dot-com/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a> -->
