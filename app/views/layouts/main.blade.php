<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Libre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    {{ stylesheet_link_tag('main/index') }}
    @yield('styles')


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

       <nav class="navbar navbar-fixed-top">
        <div id="header" class="col-xs-12 col-sm-2">
          <img class="img-responsive" src="">
        </div>

        <div class="col-sm-2">
        </div>
        <div class="col-sm-6"></div>

        <div id="nav-signin" class="col-sm-2">
        <form action="/login">
          <a href="login"><button id="menu" class="btn btn-default dropdown-toggle" type="button">
              <span class="fui-user"></span>
          </button></a>
        </form>
        </div>        
     </nav>
     
      @yield('content')

     {{ javascript_include_tag('main_app') }}
    @yield('scripts')
  </body>
</html>
