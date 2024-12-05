<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Hour Day</title>
    @yield('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
    @vite(['resources/css/sidebarStyle.css', 'resources/css/viewFeedbackStyle.css', 'resources/css/teamManagement.css', 'resources/css/feedbackFormPageStyle.css'])
  </head>
  <body>
    <div class="d-flex">
    <aside id="sidebar">
        <!-- Sidebar logo -->
        <div class="d-flex">
            <button id="toggle-btn" type="button" onclick=closeSidebar()>
                <i class="lni lni-menu-hamburger-1"></i>
            </button>
            <div class="sidebar-logo" id="sidebar-header">
              
              <a href="#" class="sidebar-word-logo">CoffeeH<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>rDay</a>
            </div>
            
        </div>
        <!-- / -->
        <!-- Sidebar nav menu -->
        <ul class="sidebar-nav">
          <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard')}}" class="sidebar-item">
              <i class="lni lni-home-2"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="{{ Route::is('registerForm') ? 'active' : '' }}">
            <a href="{{ route('registerForm')}}" class="sidebar-item">
              <i class="lni lni-file-pencil"></i>
              <span>Registration</span>
            </a>
          </li>
          <li class="{{ Route::is('slot') ? 'active' : '' }}">
            <a href="{{ route('slot') }}" class="sidebar-item">
                <i class="lni lni-calendar"></i>
                <span>Slot</span>
            </a>
          </li>
          <li class="{{ Route::is('team.management') ? 'active' : '' }}">
            <a href="{{ route('team.management')}}" class="sidebar-item">
              <i class="lni lni-user-multiple-4"></i>
              <span>Team Management</span>
            </a>
          </li>
          <!-- Feedback dropdown -->
          <li class="{{ Route::is(['feedbackForm', 'viewFeedback', 'feedbackQr']) ? 'active-word' : '' }}">
            <a href="#feedbackSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar-item">
              <i class="lni lni-comment-1-share"></i>
              <span>Feedback</span>
            </a>
            <ul class="collapse" id="feedbackSubmenu">
              <li class="{{ Route::is('feedbackForm') ||  Route::is('feedbackQr') ? 'active' : '' }}">
                <a href="{{ route('feedbackForm')}}" class="sidebar-item">
                  <span class="dropdown-word"><svg class="dropdown-svg" fill="#ff0088" width="64px" height="64px" viewBox="-20 -20 60.00 60.00" xmlns="http://www.w3.org/2000/svg" stroke="#ff0088" stroke-width="2"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(10,10), scale(0)"><rect x="-20" y="-20" width="60.00" height="60.00" rx="30" fill="#ffffff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.16"></g><g id="SVGRepo_iconCarrier"><path d="M7.8 10a2.2 2.2 0 0 0 4.4 0 2.2 2.2 0 0 0-4.4 0z"></path></g></svg>Form</span>
                </a> 
              </li>
              <!-- <li class="{{ Route::is('feedbackQr') ? 'active' : '' }}">
                <a href="{{ route('feedbackQr')}}" class="sidebar-item">
                  <span class="dropdown-word"><svg class="dropdown-svg2" fill="#59ff00" width="64px" height="64px" viewBox="-20 -20 60.00 60.00" xmlns="http://www.w3.org/2000/svg" stroke="#59ff00" stroke-width="2"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(10,10), scale(0)"><rect x="-20" y="-20" width="60.00" height="60.00" rx="30" fill="#ffffff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.16"></g><g id="SVGRepo_iconCarrier"><path d="M7.8 10a2.2 2.2 0 0 0 4.4 0 2.2 2.2 0 0 0-4.4 0z"></path></g></svg>Qr Code</span>
                </a>
              </li> -->
              <li class="{{ Route::is('viewFeedback') ? 'active' : '' }}">
                <a href="{{ route('viewFeedback')}}" class="sidebar-item">
                  <span class="dropdown-word"><svg class="dropdown-svg2" fill="#59ff00" width="64px" height="64px" viewBox="-20 -20 60.00 60.00" xmlns="http://www.w3.org/2000/svg" stroke="#59ff00" stroke-width="2"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(10,10), scale(0)"><rect x="-20" y="-20" width="60.00" height="60.00" rx="30" fill="#ffffff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.16"></g><g id="SVGRepo_iconCarrier"><path d="M7.8 10a2.2 2.2 0 0 0 4.4 0 2.2 2.2 0 0 0-4.4 0z"></path></g></svg>View Feedback</span>
                </a>
              </li>
            </ul>
          </li>
          <!--! -->
        </ul>
        <!-- / -->
    </aside> 
    <div class="container-fluid my-5">
      @yield('content')
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      const toggleButton = document.getElementById('toggle-btn')
      const sidebar = document.getElementById('sidebar')

      function closeSidebar(){
        sidebar.style.width = "58px";
        document.getElementById("toggle-btn").onclick= openNav;
      }

      function openNav(){
        sidebar.style.width = "300px";
        document.getElementById("toggle-btn").onclick= closeSidebar;
      }
    </script>
  </body>
</html>