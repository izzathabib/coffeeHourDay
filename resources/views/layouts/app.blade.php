<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Hour Day</title>
    @yield('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
    @vite(['resources/css/sidebarStyle.css'])
  </head>
  <body>
    <div class="d-flex">
    <aside id="sidebar">
        <!-- Sidebar logo -->
        <div class="d-flex">
            <div class="sidebar-logo">
                <a href="#">CoffeeHourDay</a>
            </div>
            <button id="toggle-btn" type="button">
                <i class="lni lni-menu-hamburger-1"></i>
            </button>
        </div>
        <!-- / -->
        <!-- Sidebar nav menu -->
        <ul class="sidebar-nav">
          <a href="#" class="sidebar-link">
            <li class="sidebar-item">
              <i class="lni lni-home-2"></i>
              <span>Dashboard</span>
            </li>
          </a>
          <a href="#" class="sidebar-link">
            <li class="sidebar-item">
              <i class="lni lni-file-pencil"></i>
              <span>Registration</span>
            </li>
          </a>
          <a href="#" class="sidebar-link">
            <li class="sidebar-item">
              <i class="lni lni-calendar-days"></i>
              <span>Book Slot</span>
            </li>
          </a>
          <a href="#" class="sidebar-link">
            <li class="sidebar-item">
              <i class="lni lni-user-multiple-4"></i>
              <span>Team Management</span>
            </li>
          </a>
          <a href="#" class="sidebar-link">
            <li class="sidebar-item">
              <i class="lni lni-comment-1-share"></i>
              <span>Feedback</span>
            </li>
          </a>
        </ul>
        <!-- / -->
    </aside> 
    
    @yield('content')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>