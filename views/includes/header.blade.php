<nav class="navbar navbar-info navbar-transparent navbar-fixed-top navbar-color-on-scroll">
  <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        @if ( Flight::request()->base.'/bud' == strtolower($_SERVER['REQUEST_URI']) )
        <a href="{{ Flight::request()->base }}">
          <div class="logo-container">
              <div class="logo">
                  <img src="logo.png" alt=" Logo" rel="tooltip" title="<b>{{ Flight::get('brand') }}</b>  is maintained with care by the staff from <b>BITVoxy Network</b>" data-placement="bottom" data-html="true">
              </div>
              <div class="brand">
                  {{ Flight::get('brand.bud') }}
              </div>
          </div>
        </a>
        @else
        <a href="{{ Flight::request()->base }}">
          <div class="logo-container">
              <div class="logo">
                  <img src="icon.png" rel="tooltip" title="<b>{{ Flight::get('brand') }}</b>  is maintained with care by the staff from <b>BITVoxy Network</b>" data-placement="bottom" data-html="true">
              </div>
              <div class="brand">
                  {{ Flight::get('brand') }}
              </div>
          </div>
        </a>
        @endif
      </div>

      <div class="collapse navbar-collapse" id="navigation-index">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="{{ Flight::request()->base }}" target="">
              <i class="material-icons">home</i>
            </a>
          </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="material-icons">code</i> Code <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="https://github.com/BITVoxy/BUD">PHPBUD Framework Stack</a></li>
              </ul>
          </li>
          <li>
          <li>
          </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="BUD">PHPBUD Framework Stack</a></li>
              </ul>
          </li>
          <li>
          <li>
            <a href="{{ Flight::request()->base }}" target="_blank">
              <i class="material-icons">book</i> Blog
            </a>
          </li>

            <a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="{{ Flight::get('twitter') }}" target="_blank" class="btn btn-white btn-simple btn-just-icon">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="{{ Flight::get('facebook') }}" target="_blank" class="btn btn-white btn-simple btn-just-icon">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li>
            <a rel="tooltip" title="Github" data-placement="bottom" href="{{ Flight::get('facebook') }}" target="_blank" class="btn btn-white btn-simple btn-just-icon">
              <i class="fa fa-github"></i>
            </a>
          </li>
        </ul>
      </div>
  </div>
</nav>