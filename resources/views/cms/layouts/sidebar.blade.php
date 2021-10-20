<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container-fluid">
      <ul class="navbar-nav init-sidebar">
        <li class="nav-item dropdown {{ request()->is('cms/dashboard') ? 'active' : '' }}">
          <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i
              data-feather="airplay"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link {{ request()->is('cms/dashboard') ? 'active' : '' }}" href="{{ url('cms/dashboard') }}">Dashboard 1</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown {{ request()->is('cms/product') || request()->is('cms/material') ? 'active' : '' }}">
          <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i
              data-feather="box"></i><span>Master Data</span></a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link {{ request()->is('cms/product') ? 'active' : '' }}" href="{{ url('cms/product') }}">Produk</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('cms/material') ? 'active' : '' }}" href="{{ url('cms/material') }}">Matrial</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown {{ request()->is('cms/config') ? 'active' : '' }}" >
          <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i data-feather="copy"></i><span>Landing Page</span></a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link {{ request()->is('cms/config') ? 'active' : '' }}" href="{{ url('cms/config') }}">Konten</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown {{ request()->is('cms/users') || request()->is('cms/role') ? 'active' : '' }}" >
          <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i data-feather="users"></i><span>Pengguna</span></a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link {{ request()->is('cms/users') ? 'active' : '' }}" href="{{ url('cms/users') }}">Pengguna</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('cms/role') ? 'active' : '' }}" href="{{ url('cms/role') }}">Hak Akses</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown {{ request()->is('cms/setting') ? 'active' : '' }}" >
          <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i data-feather="settings"></i><span>Pengaturan</span></a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link {{ request()->is('cms/setting/changePassword') ? 'active' : '' }}" href="{{ url('cms/setting/changePassword') }}">Ganti Password</a></li>
        </ul>
        </li>

      </ul>
    </div>
  </nav>
