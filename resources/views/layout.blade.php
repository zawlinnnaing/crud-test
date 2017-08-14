<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Mandalay Technological University</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/styles.css')?>">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bulma.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blueberry.css')}}">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="title mdl-layout-title">
            <!-- <img class="logo-image" src="images/logo.png"> -->
             <span class="title-prefix">M</span>andalay<br><span class="title-prefix">T</span>echnological<br><span class="title-prefix">U</span>niversity
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="header-spacer mdl-layout-spacer"></div>
          <!-- <div class="search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div> -->
          <!-- Navigation -->
          <div class="navigation-container">
            <nav class="navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/departments/civil">Departments</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Acedamic Plan</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Activities</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Research</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Alumini</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">About</a>
            </nav>
          </div>
          <span class="mobile-title mdl-layout-title">
            <!-- <img class="logo-image" src="images/logo.png"> -->
             <span class="title-prefix">M</span>andalay<br><span class="title-prefix">T</span>echnological<br><span class="title-prefix">U</span>niversity
          </span>
          <!-- <button class="more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button> -->
         <!--  <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item">5.0 Lollipop</li>
            <li class="mdl-menu__item">4.4 KitKat</li>
            <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>
            <li class="mdl-menu__item">Android History</li>
          </ul> -->
        </div>
      </div>

      <div class="drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="logo-image" src="images/logo-white.png">
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Phones</a>
          <a class="mdl-navigation__link" href="">Tablets</a>
          <a class="mdl-navigation__link" href="">Wear</a>
          <a class="mdl-navigation__link" href="">TV</a>
          <a class="mdl-navigation__link" href="">Auto</a>
          <a class="mdl-navigation__link" href="">One</a>
          <a class="mdl-navigation__link" href="">Play</a>
          <div class="drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Versions</span>
          <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
          <a class="mdl-navigation__link" href="">KitKat 4.4</a>
          <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
          <a class="mdl-navigation__link" href="">Android history</a>
          <div class="drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Resources</span>
          <a class="mdl-navigation__link" href="">Official blog</a>
          <a class="mdl-navigation__link" href="">Android on Google+</a>
          <a class="mdl-navigation__link" href="">Android on Twitter</a>
          <div class="drawer-separator"></div>
          <span class="mdl-navigation__link" href="">For developers</span>
          <a class="mdl-navigation__link" href="">App developer resources</a>
          <a class="mdl-navigation__link" href="">Android Open Source Project</a>
          <a class="mdl-navigation__link" href="">Android SDK</a>
        </nav>
      </div>
      @yield('content')
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>