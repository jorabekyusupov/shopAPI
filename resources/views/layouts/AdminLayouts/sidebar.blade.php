<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/dashboard"> <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown {{ !isset($_GET['active'])  ? 'active' : ''}}">
          <a href="/dashboard" class="nav-link {{ !isset($_GET['active'])  ? 'toggled' : ''}}"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown {{ isset($_GET['active']) && $_GET['active'] == 'product' || isset($_GET['active']) && $_GET['active'] == 'category' || isset($_GET['active']) && $_GET['active'] == 'role'  ? 'active' : ''}}">
          <a href="#" class="menu-toggle nav-link has-dropdown {{isset($_GET['active']) && $_GET['active'] == 'product' || isset($_GET['active']) && $_GET['active'] == 'category'  ? 'toggled' : ''}}"><i
              data-feather="grid"></i><span>Tables</span></a>
          <ul class="dropdown-menu {{ isset($_GET['active']) && $_GET['active'] == 'product' || isset($_GET['active']) && $_GET['active'] == 'category'  ? 'active' : ''}}">
            <li class="{{ isset($_GET['active']) && $_GET['active'] == 'product' ? 'active' : ''}}"><a class="nav-link {{ isset($_GET['active']) && $_GET['active'] == 'product' ? 'toggled' : ''}}" href="/product?active=product">Products</a></li>
            <li class="{{ isset($_GET['active']) && $_GET['active'] == 'category' ? 'active' : ''}}"><a class="nav-link {{ isset($_GET['active']) && $_GET['active'] == 'category' ? 'toggled' : ''}}" href="/category?active=category">Categories</a></li>
            <li class="{{ isset($_GET['active']) && $_GET['active'] == 'role' ? 'active' : ''}}"><a class="nav-link {{ isset($_GET['active']) && $_GET['active'] == 'role' ? 'toggled' : ''}}" href="/role?active=role">User with Role</a></li>
          </ul>
        </li>
      </ul>
    </aside>
  </div>
