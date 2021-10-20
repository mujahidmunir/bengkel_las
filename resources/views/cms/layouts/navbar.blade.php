<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
      <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"> <i data-feather="menu"></i></a>
      <ul class="navbar-nav mr-3">
        <li>
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">CMS BESI</span>
            </a>
          </div>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav navbar-right">
      <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
          <i data-feather="maximize"></i>
        </a></li>

      <li class="dropdown"><a href="#" data-toggle="dropdown"
          class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{ asset('assets/cms/assets/img/user.png') }}"
            class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
        <div class="dropdown-menu dropdown-menu-right pullDown">
          <div class="dropdown-title">Hello {{ Auth::user()->name }}</div>
          <div class="dropdown-divider"></div>

          <form action="{{ url('cms/logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i>
                Logout</button>
          </form>
        </div>
      </li>
    </ul>
  </nav>
