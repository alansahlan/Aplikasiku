<!DOCTYPE html>
<html class="hide-sidebar ls-bottom-footer-fixed" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>{{ Config::get('site.name')}}</title>

  <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
  <link href="{{ URL::to('themekit')}}/css/vendor/all.css" rel="stylesheet">

  <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->
  <!-- APP CSS BUNDLE [css/app/app.css]
INCLUDES:
    - The APP CSS CORE styling required by the "real-estate" module, also available with main.css - see below;
    - The APP CSS STANDALONE modules required by the "real-estate" module;

TIP:
    - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
  <link href="{{ URL::to('themekit')}}/css/app/app.css" rel="stylesheet">


  <link href="{{ URL::to('themekit')}}/css/app/social.css" rel="stylesheet">
  <!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->
  <!-- <link href="{{ URL::to('themekit')}}/css/app/main.css" rel="stylesheet"> -->

  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="{{ URL::to('themekit')}}/js/vendor/core/jquery.js"></script>
<script src="{{ URL::to('themekit')}}/js/vendor/core/bootstrap.js"></script>

</head>

<body>


  @yield('content')

  <!-- Footer -->
  <footer class="footer">
    <strong>{{ Config::get('site.name')}}</strong> &copy; Copyright 2016
  </footer>
  <!-- // Footer -->

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "real-estate",
      skins: {
        "default": {
          "primary-color": "#3498db"
        }
      }
    };
  </script>

  

  <!-- Vendor Scripts Standalone Libraries -->
  <!-- <script src="{{ URL::to('themekit')}}/js/vendor/core/all.js"></script> -->
  <script src="{{ URL::to('themekit')}}/js/vendor/core/breakpoints.js"></script>
  <script src="{{ URL::to('themekit')}}/js/vendor/core/jquery.nicescroll.js"></script>
  
  <!-- <script src="{{ URL::to('themekit')}}/js/vendor/core/packery-mode.pkgd.js"></script> -->
  <script src="{{ URL::to('themekit')}}/js/vendor/core/jquery.grid-a-licious.js"></script>
  <script src="{{ URL::to('themekit')}}/js/vendor/core/jquery.cookie.js"></script>
  
  <!-- <script src="{{ URL::to('themekit')}}/js/vendor/core/jquery.hotkeys.js"></script> -->
  <script src="{{ URL::to('themekit')}}/js/vendor/core/load_image.js"></script>
  <script src="{{ URL::to('themekit')}}/js/vendor/core/jquery.debouncedresize.js"></script>
  <!-- <script src="{{ URL::to('themekit')}}/js/vendor/tables/all.js"></script> -->
  <script src="{{ URL::to('themekit')}}/js/vendor/forms/all.js"></script>
  <script src="{{ URL::to('themekit')}}/js/vendor/media/all.js"></script>
 

  <script src="{{ URL::to('themekit') }}/js/app/essentials.js"></script>
  <script src="{{ URL::to('themekit') }}/js/app/layout.js"></script>
  <!-- <script src="{{ URL::to('themekit') }}/js/app/sidebar.js"></script> -->
  <script src="{{ URL::to('themekit') }}/js/app/media.js"></script>
  <!-- <script src="{{ URL::to('themekit') }}/js/app/player.js"></script> -->
  

  <!-- App Scripts CORE [real-estate]:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        app.js already includes main.js so this should be loaded
        ONLY when using the standalone modules; -->
  <script src="{{ URL::to('themekit') }}/js/app/main.js"></script>

</body>

</html>