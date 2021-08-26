<div class="navbar-bg"></div>
<nav class="sticky navbar navbar-expand-lg main-navbar">
 <div class="mr-auto form-inline">
  <ul class="mr-3 navbar-nav">
   <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> <i data-feather="align-justify"></i></a></li>
   <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
     <i data-feather="maximize"></i>
    </a></li>
   <li>
    <form class="mr-auto form-inline">
     <div class="search-element">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
      <button class="btn" type="submit">
       <i class="fas fa-search"></i>
      </button>
     </div>
    </form>
   </li>
  </ul>
 </div>
 <ul class="navbar-nav navbar-right">
  <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
    <span class="badge headerBadge1">
     0 </span> </a>
   <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
    <div class="dropdown-header">
     Messages
     <div class="float-right">
      <a href="#">Mark All As Read</a>
     </div>
    </div>
    <div class="dropdown-list-content dropdown-list-message">
     <a href="#" class="dropdown-item"> <span class="text-white dropdown-item-avatar"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
      </span> <span class="dropdown-item-desc"> <span class="message-user">John
        Deo</span>
       <span class="time messege-text">Please check your mail !!</span>
       <span class="time">2 Min Ago</span>
      </span>
     </a>


    </div>
    <div class="text-center dropdown-footer">
     <a href="#">View All <i class="fas fa-chevron-right"></i></a>
    </div>
   </div>
  </li>
  <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
   </a>
   <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
    <div class="dropdown-header">
     Notifications
     <div class="float-right">
      <a href="#">Mark All As Read</a>
     </div>
    </div>
    <div class="dropdown-list-content dropdown-list-icons">
     <a href="#" class="dropdown-item dropdown-item-unread"> <span class="text-white dropdown-item-icon bg-primary"> <i class="fas fa-code"></i>
      </span> <span class="dropdown-item-desc"> Template update is
       available now! <span class="time">2 Min
        Ago</span>
      </span>
     </a>


    </div>
    <div class="text-center dropdown-footer">
     <a href="#">View All <i class="fas fa-chevron-right"></i></a>
    </div>
   </div>
  </li>
  <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
    @if (auth()->user()->image)
    <img alt="image" src="{{ asset('storage/profile-photos') . '/' . auth()->user()->image }}" alt="{{ Auth::user()->name }}" class="user-img-radious-style">

    @endif

    <span class="d-sm-none d-lg-inline-block"></span></a>
   <div class="dropdown-menu dropdown-menu-right pullDown">
    <div class="dropdown-title">Hello {{ Auth::user()->name }}</div>
    <a href="{{ route('profile.show') }}" class="dropdown-item has-icon"> <i class="far fa-user"></i> Profile
    </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
     Activities
    </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
     Settings
    </a>
    <div class="dropdown-divider"></div>
    <form action="{{ route('logout') }}" method="POST">
     @csrf

     <button type="submit" class="dropdown-item has-icon text-danger d-flex align-items-center"><i class="fas fa-sign-out-alt"></i> Logout</button>
    </form>

   </div>
  </li>
 </ul>
</nav>
