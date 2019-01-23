<a href="#" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  @if (Auth::user()->shopname != NULL)
    <span class="logo-mini"><b>G</b>T</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">{{Auth::user()->shopname}}</span>  
  @endif
  <span class="logo-mini img-sm"><img src="{{asset('logo.png') }}" alt="PanT"></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>Gny</b> Transax</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user"></span>
          <span class="hidden-xs">{{Auth::user()->name}} <span class="caret"></span></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <span class="glyphicon glyphicon-user"></span>
            <p>
              {{Auth::user()->name}}
              <small>{{Auth::user()->email}}</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="/gtrade/profile" class="btn btn-default btn-flat fa fa-user">Profile</a>
            </div>
            <div class="pull-right">
              <a class="btn btn-default btn-flat fa fa-sign-out" 
                  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"> Sign out
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>