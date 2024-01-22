<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Builder4DashBoard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="style.min.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">

  <style>
    /* Add this style to make the list items display horizontally */
    .main-nav-option ul {
      display: flex;
      list-style: none;
      margin: 10px;
      padding: 0px;
    }

    .main-nav-option li {
        margin-right: 15px; /* Adjust the spacing between items as needed */
      border: 1px solid black; /* Add border with 1px radius */
      border-radius: 5px; /* Set border radius */
      padding: 5px 10px;
      background-color: marron;
        /* Adjust the spacing between items as needed */
    }

    .main-nav-options a {
      text-decoration: none;
      color: #ffffff; /* Adjust the color as needed */
    }
  </style>
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#"></a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <!--<a href="/" class="logo-wrapper" title="Home"> -->
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Builder4DashBoard</span>
                    <span class="logo-subtitle">MAKE | PREVIEW | LAUNCH</span>
                </div>

            </a>
            <button class="sidebar-toggl transparent-btn" title="Menu" type="button" >
                <span class="sr-only" style="background-color: black;">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body" style="background-color:#66ccff;">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Choose a Dashboard Template</a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span><span style="color: black;">E-Commerce</span>
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only"><span style="color: black;"></span>Home Page</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="#"><span style="color: black;">Home Page</span></a>
                        </li>
                        <li>
                            <a href="#"><span style="color: black;">Graphs</span></a>
                        </li><li>
                          <a href="#"><span style="color: black;">Reports</span></a>
                      </li>

                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span><span style="color: black; font-weight:bold;">Advance</span>
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="#">All categories</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon image" aria-hidden="true"></span><span style="color: black;">Merchandise</span>
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="#">Landing Page</a>
                        </li>
                        <li>
                            <a href="#">Main Dashboard</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon paper" aria-hidden="true"></span><span style="color: black;">Pages</span>
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="pages.html">All pages</a>
                        </li>
                        <li>
                            <a href="new-page.html">Add new page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    
                </li>
            </ul>
            <span class="system-menu__title"></span><span style="color: black;">Settings</span>
            <ul class="sidebar-body-menu">
                <li>
                    <a href="appearance.html"><span class="icon edit" aria-hidden="true"></span><span style="color: black;">Appearnce</span></a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon category" aria-hidden="true"></span><span style="color: black;">Themes</span>
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="extention-01.html">Extentions-01</a>
                        </li>
                        <li>
                            <a href="extention-02.html">Extentions-02</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon user-3" aria-hidden="true"></span><span style="color: black;">Widgets</span>
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="users-01.html">Users-01</a>
                        </li>
                        <li>
                            <a href="users-02.html">Users-02</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="icon setting" aria-hidden="true"></span><span style="color: black;">FAQ</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="#" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><source srcset="avatar-illustrated-01.webp" type="image/webp"><img src="avatar-illustrated-01.png" alt="User name"></picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Contact Now</span>
                <span class="sidebar-user__subtitle">Builder4Dashboard</span>
            </div>
        </a>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Search" required style="color: black; background-color: yellow; color:black;">
      </div>
    </div>
    <div class="main-nav-option">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Testimonials</a></li>
      </ul>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          LANGUAGES
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">Hindi</a></li>
          
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="avatar-illustrated-02.webp" type="image/webp"><img src="avatar-illustrated-02.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Account settings</span>
            </a></li>
          <li><a class="" href="#">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Sign Up</span>
            </a></li>
            <li><a class="danger" href="##">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log In</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Dashboard Template</h2>
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">TimePlex Themes</p>
                <p class="stat-cards-info__title">Total Downloads</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">AquaMarine Themes </p>
                <p class="stat-cards-info__title">Total Downloads</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.24%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon purple">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">GalaxyCommerce Themes</p>
                <p class="stat-cards-info__title">Total Downloads</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>1.64%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon success">
                <i data-feather="feather" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">AlienIsland Themes</p>
                <p class="stat-cards-info__title">Total visits</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.00%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <div class="chart">
              <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
            </div>
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>
                      <label class="users-table__checkbox ms-20">
                        <input type="checkbox" class="check-all">Theme
                      </label>
                    </th>
                    <th>Purpose</th>
                    <th>Creator</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="01.webp" type="image/webp"><img src="01.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      Starting your traveling blog with Vasco Theme
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="avatar-face-04.webp" type="image/webp"><img src="avatar-face-04.png" alt="User Name"></picture>
                        Watson
                      </div>
                    </td>
                    <td><span class="badge-pending">Pending</span></td>
                    <td>17.04.2021</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="02.webp" type="image/webp"><img src="02.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      Start a blog on traveling with PeakTravel Theme
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="avatar-face-03.webp" type="image/webp"><img src="avatar-face-03.png" alt="User Name"></picture>
                        Andria 
                      </div>
                    </td>
                    <td><span class="badge-pending">Pending</span></td>
                    <td>31.04.2020</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="03.webp" type="image/webp"><img src="03.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      Helping a local business reinvent itself and build a communitiy website with Commun Theme
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="avatar-face-02.webp" type="image/webp"><img src="avatar-face-02.png" alt="User Name"></picture>
                        Alexander
                      </div>
                    </td>
                    <td><span class="badge-active">Active</span></td>
                    <td>17.12.2022</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="04.webp" type="image/webp"><img src="04.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      Market your skills and talents on the internet with MarketQuote Theme
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="avatar-face-05.webp" type="image/webp"><img src="avatar-face-05.png" alt="User Name"></picture>
                        Stebein
                      </div>
                    </td>
                    <td><span class="badge-active">Active</span></td>
                    <td>1.03.2023</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="01.webp" type="image/webp"><img src="01.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      How to build a loyal community online and offline use the LoyalOnline Theme
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="avatar-face-03.webp" type="image/webp"><img src="avatar-face-03.png" alt="User Name"></picture>
                        Forest
                      </div>
                    </td>
                    <td><span class="badge-active">Active</span></td>
                    <td>20.09.2022</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="03.webp" type="image/webp"><img src="03.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                     Sell and Buy Products using BuyPro Theme
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="avatar-face-03.webp" type="image/webp"><img src="avatar-face-03.png" alt="User Name"></picture>
                        Robert
                      </div>
                    </td>
                    <td><span class="badge-active">Active</span></td>
                    <td>17.04.2023</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-3">
            <article class="customers-wrapper">
              <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas>
              <!--              <p class="customers__title">New Customers <span>+958</span></p>
              <p class="customers__date">28 Daily Avg.</p>
              <picture><source srcset="./img/svg/customers.svg" type="image/webp"><img src="./img/svg/customers.svg" alt=""></picture> -->
            </article>
            <article class="white-block">
              <div class="top-cat-title">
                <h3>Top categories</h3>
                <p>28 Categories, 1400 Posts</p>
              </div>
              <ul class="top-cat-list">
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Lifestyle <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Dailiy lifestyle articles <span class="purple">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Tutorials <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Coding tutorials <span class="blue">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Technology <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Dailiy technology articles <span class="danger">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      UX design <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      UX design tips <span class="success">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Interaction tips <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Interaction articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      App development <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Mobile development articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Nature <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Wildlife animal articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Geography <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Geography articles <span class="primary">+472</span>
                    </div>
                  </a>
                </li>
              </ul>
            </article>
          </div>
        </div>
      </div>
    </main>
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p style="font-weight: bold; color: black; font-size: 20px; text-align: center;" >Designed  and Developed by Kumar Biswas @ Copyright 2024</p>
    </div>
    <ul class="footer-end">
      <li><a href="##">About</a></li>
      <li><a href="##">Support</a></li>
      <li><a href="##">Puchase</a></li>
    </ul>
  </div>
</footer>
  </div>
</div>
<!-- Chart library -->
<script src="chart.min.js"></script>
<!-- Icons library -->
<script src="feather.min.js"></script>
<!-- Custom scripts -->
<script src="script.js"></script>
</body>

</html>