<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Basic Table | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Basic Table">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="https://uselooper.com">
    <meta property="og:url" content="https://uselooper.com">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <script type="application/ld+json">
      {
        "name": "Looper - Bootstrap 4 Admin Theme",
        "description": "Responsive admin theme build on top of Bootstrap 4",
        "author":
        {
          "@type": "Person",
          "name": "Beni Arisandi"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Basic Table",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="assets/stylesheets/custom.css">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add flag class to html immediately
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!-- .app -->
    <div class="app">
      <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
      <!-- .app-header -->
      <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <!-- toggle aside menu -->
            <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
            <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28" viewbox="0 0 351 100">
                <defs>
                  <path id="a" d="M156.538 45.644v1.04a6.347 6.347 0 0 1-1.847 3.98L127.708 77.67a6.338 6.338 0 0 1-3.862 1.839h-1.272a6.34 6.34 0 0 1-3.862-1.839L91.728 50.664a6.353 6.353 0 0 1 0-9l9.11-9.117-2.136-2.138a3.171 3.171 0 0 0-4.498 0L80.711 43.913a3.177 3.177 0 0 0-.043 4.453l-.002.003.048.047 24.733 24.754-4.497 4.5a6.339 6.339 0 0 1-3.863 1.84h-1.27a6.337 6.337 0 0 1-3.863-1.84L64.971 50.665a6.353 6.353 0 0 1 0-9l26.983-27.008a6.336 6.336 0 0 1 4.498-1.869c1.626 0 3.252.622 4.498 1.87l26.986 27.006a6.353 6.353 0 0 1 0 9l-9.11 9.117 2.136 2.138a3.171 3.171 0 0 0 4.498 0l13.49-13.504a3.177 3.177 0 0 0 .046-4.453l.002-.002-.047-.048-24.737-24.754 4.498-4.5a6.344 6.344 0 0 1 8.996 0l26.983 27.006a6.347 6.347 0 0 1 1.847 3.98zm-46.707-4.095l-2.362 2.364a3.178 3.178 0 0 0 0 4.501l2.362 2.364 2.361-2.364a3.178 3.178 0 0 0 0-4.501l-2.361-2.364z"></path>
                </defs>
                <g fill="none" fill-rule="evenodd">
                  <path fill="currentColor" fill-rule="nonzero" d="M39.252 80.385c-13.817 0-21.06-8.915-21.06-22.955V13.862H.81V.936h33.762V58.1c0 6.797 4.346 9.026 9.026 9.026 2.563 0 5.237-.446 8.58-1.783l3.677 12.034c-5.794 1.894-9.694 3.009-16.603 3.009zM164.213 99.55V23.78h13.372l1.225 5.571h.335c4.457-4.011 10.585-6.908 16.491-6.908 13.817 0 22.174 11.031 22.174 28.08 0 18.943-11.588 29.863-23.957 29.863-4.903 0-9.694-2.117-13.594-6.017h-.446l.78 9.025V99.55h-16.38zm25.852-32.537c6.128 0 10.92-4.903 10.92-16.268 0-9.917-3.232-14.932-10.14-14.932-3.566 0-6.797 1.56-10.252 5.126v22.397c3.12 2.674 6.686 3.677 9.472 3.677zm69.643 13.372c-17.272 0-30.643-10.586-30.643-28.972 0-18.163 13.928-28.971 28.748-28.971 17.049 0 26.075 11.477 26.075 26.52 0 3.008-.558 6.017-.78 7.354h-37.663c1.56 8.023 7.465 11.589 16.491 11.589 5.014 0 9.36-1.337 14.263-3.9l5.46 9.917c-6.351 4.011-14.597 6.463-21.951 6.463zm-1.338-45.463c-6.462 0-11.031 3.454-12.702 10.363h23.622c-.78-6.797-4.568-10.363-10.92-10.363zm44.238 44.126V23.779h13.371l1.337 12.034h.334c5.46-9.025 13.595-13.371 22.398-13.371 4.902 0 7.465.78 10.697 2.228l-3.343 13.706c-3.454-1.003-5.683-1.56-9.806-1.56-6.797 0-13.928 3.566-18.608 13.483v28.749h-16.38z"></path>
                  <use class="fill-warning" xlink:href="#a"></use>
                </g>
              </svg></a>
          </div><!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-full">
              <!-- .top-bar-search -->
              <form class="top-bar-search">
                <!-- .input-group -->
                <div class="input-group input-group-search dropdown">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                  </div><input type="text" class="form-control" data-toggle="dropdown" aria-label="Search" placeholder="Search"> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-xl ml-n4 mw-100">
                    <div class="dropdown-arrow ml-3"></div><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar h-auto" style="max-height: 360px">
                      <!-- .list-group -->
                      <div class="list-group list-group-flush list-group-reflow mb-2">
                        <h6 class="list-group-header d-flex justify-content-between">
                          <span>Shortcut</span>
                        </h6><!-- .list-group-item -->
                        <div class="list-group-item py-2">
                          <a href="#" class="stretched-link"></a>
                          <div class="tile tile-sm bg-muted">
                            <i class="fas fa-user-plus"></i>
                          </div>
                          <div class="ml-2"> Create user </div>
                        </div><!-- /.list-group-item -->
                        <!-- .list-group-item -->
                        <div class="list-group-item py-2">
                          <a href="#" class="stretched-link"></a>
                          <div class="tile tile-sm bg-muted">
                            <i class="fas fa-dollar-sign"></i>
                          </div>
                          <div class="ml-2"> Create invoice </div>
                        </div><!-- /.list-group-item -->
                        <h6 class="list-group-header d-flex justify-content-between mt-2">
                          <span>In projects</span> <a href="#" class="font-weight-normal">Show more</a>
                        </h6><!-- .list-group-item -->
                        <div class="list-group-item py-2">
                          <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
                          <div class="user-avatar user-avatar-sm bg-muted">
                            <img src="assets/images/avatars/bootstrap.svg" alt="">
                          </div>
                          <div class="ml-2">
                            <div class="mb-n1"> Bootstrap </div><small class="text-muted">Just now</small>
                          </div>
                        </div><!-- /.list-group-item -->
                        <!-- .list-group-item -->
                        <div class="list-group-item py-2">
                          <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
                          <div class="user-avatar user-avatar-sm bg-muted">
                            <img src="assets/images/avatars/slack.svg" alt="">
                          </div>
                          <div class="ml-2">
                            <div class="mb-n1"> Slack </div><small class="text-muted">Updated 25 minutes ago</small>
                          </div>
                        </div><!-- /.list-group-item -->
                        <!-- /.list-group-item -->
                        <h6 class="list-group-header d-flex justify-content-between mt-2">
                          <span>Another section</span> <a href="#" class="font-weight-normal">Show more</a>
                        </h6><!-- .list-group-item -->
                        <div class="list-group-item py-2">
                          <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
                          <div class="tile tile-sm bg-muted"> P </div>
                          <div class="ml-2">
                            <div class="mb-n1"> Product name </div>
                          </div>
                        </div><!-- /.list-group-item -->
                      </div><!-- /.list-group -->
                    </div><!-- /.dropdown-scroll -->
                    <a href="#" class="dropdown-footer">Show all results</a>
                  </div><!-- /.dropdown-menu -->
                </div><!-- /.input-group -->
              </form><!-- /.top-bar-search -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              <!-- .nav -->
              <ul class="header-nav nav">
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-pulse"></span></a> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <div class="dropdown-arrow"></div>
                    <h6 class="dropdown-header stop-propagation">
                      <span>Activities <span class="badge">(2)</span></span>
                    </h6><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar">
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces15.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Jeffrey Wells created a schedule </p><span class="date">Just now</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces16.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Anna Vargas logged a chat </p><span class="date">3 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces17.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Sara Carr invited to Stilearn Admin </p><span class="date">5 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces18.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Arthur Carroll updated a project </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces19.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Hannah Romero created a task </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces20.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Angela Peterson assign a task to you </p><span class="date">2 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces21.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Shirley Mason and 3 others followed you </p><span class="date">2 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                    </div><!-- /.dropdown-scroll -->
                    <a href="user-activities.html" class="dropdown-footer">All activities <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                  </div><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-envelope-open"></span></a> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <div class="dropdown-arrow"></div>
                    <h6 class="dropdown-header stop-propagation">
                      <span>Messages</span> <a href="#">Mark all as read</a>
                    </h6><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar">
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/team1.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Stilearning </p>
                          <p class="text text-truncate"> Invitation: Joe's Dinner @ Fri Aug 22 </p><span class="date">2 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/team3.png" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Openlane </p>
                          <p class="text text-truncate"> Final reminder: Upgrade to Pro </p><span class="date">23 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-green"> GZ </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Gogo Zoom </p>
                          <p class="text text-truncate"> Live healthy with this wireless sensor. </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-teal"> GD </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Gold Dex </p>
                          <p class="text text-truncate"> Invitation: Design Review @ Mon Jul 7 </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/team2.png" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Creative Division </p>
                          <p class="text text-truncate"> Need some feedback on this please </p><span class="date">2 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-pink"> LD </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Lab Drill </p>
                          <p class="text text-truncate"> Our UX exercise is ready </p><span class="date">6 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                    </div><!-- /.dropdown-scroll -->
                    <a href="page-messages.html" class="dropdown-footer">All messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                  </div><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-grid-three-up"></span></a> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <div class="dropdown-arrow"></div><!-- .dropdown-sheets -->
                    <div class="dropdown-sheets">
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i class="oi oi-people"></i></span> <span class="tile-peek">Teams</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span> <span class="tile-peek">Projects</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i class="fa fa-tasks"></i></span> <span class="tile-peek">Tasks</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i class="oi oi-fire"></i></span> <span class="tile-peek">Feeds</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-cyan"><i class="oi oi-document"></i></span> <span class="tile-peek">Files</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                    </div><!-- .dropdown-sheets -->
                  </div><!-- .dropdown-menu -->
                </li><!-- /.nav-item -->
              </ul><!-- /.nav -->
              <!-- .btn-account -->
              <div class="dropdown d-none d-md-flex">
                <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                  <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> Beni Arisandi </h6><a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
                </div><!-- /.dropdown-menu -->
              </div><!-- /.btn-account -->
            </div><!-- /.top-bar-item -->
          </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
      </header><!-- /.app-header -->
      <!-- .app-aside -->
      <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
              </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item">
                  <a href="index.html" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon far fa-file"></span> <span class="menu-text">App Pages</span> <span class="badge badge-warning">New</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="page-clients.html" class="menu-link">Clients</a>
                    </li>
                    <li class="menu-item">
                      <a href="page-teams.html" class="menu-link">Teams</a>
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Team</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="page-team.html" class="menu-link">Overview</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-team-feeds.html" class="menu-link">Feeds</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-team-projects.html" class="menu-link">Projects</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-team-members.html" class="menu-link">Members</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Project</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="page-project.html" class="menu-link">Overview</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-project-board.html" class="menu-link">Board</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-project-gantt.html" class="menu-link">Gantt View</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="page-calendar.html" class="menu-link">Calendar</a>
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Invoices</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="page-invoices.html" class="menu-link">List</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-invoice.html" class="menu-link">Details</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="page-messages.html" class="menu-link">Messages</a>
                    </li>
                    <li class="menu-item">
                      <a href="page-conversations.html" class="menu-link">Conversations</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-wrench"></span> <span class="menu-text">Auth</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="auth-comingsoon-v1.html" class="menu-link">Coming Soon v1</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-comingsoon-v2.html" class="menu-link">Coming Soon v2</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-cookie-consent.html" class="menu-link">Cookie Consent</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-empty-state.html" class="menu-link">Empty State</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-error-v1.html" class="menu-link">Error Page v1</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-error-v2.html" class="menu-link">Error Page v2</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-error-v3.html" class="menu-link">Error Page v3</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-maintenance.html" class="menu-link">Maintenance</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-page-message.html" class="menu-link">Page Message</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-session-timeout.html" class="menu-link">Session Timeout</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-signin-v1.html" class="menu-link">Sign In v1</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-signin-v2.html" class="menu-link">Sign In v2</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-signup.html" class="menu-link">Sign Up</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-recovery-username.html" class="menu-link">Recovery Username</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-recovery-password.html" class="menu-link">Recovery Password</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-lockscreen.html" class="menu-link">Screen Locked</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">User</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="user-profile.html" class="menu-link">Profile</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-activities.html" class="menu-link">Activities</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-teams.html" class="menu-link">Teams</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-projects.html" class="menu-link">Projects</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-tasks.html" class="menu-link">Tasks</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-profile-settings.html" class="menu-link">Profile Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-account-settings.html" class="menu-link">Account Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-billing-settings.html" class="menu-link">Billing Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-notification-settings.html" class="menu-link">Notification Settings</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Layouts</span> <span class="badge badge-subtle badge-success">+4</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="layout-blank.html" class="menu-link">Blank Page</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-nosearch.html" class="menu-link">Header no Search</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-horizontal-menu.html" class="menu-link">Horizontal Menu</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-fullwidth.html" class="menu-link">Full Width</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagenavs.html" class="menu-link">Page Navs</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagecover.html" class="menu-link">Page Cover</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagecover-img.html" class="menu-link">Cover Image</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagesidebar.html" class="menu-link">Page Sidebar</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagesidebar-fluid.html" class="menu-link">Sidebar Fluid</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagesidebar-hidden.html" class="menu-link">Sidebar Hidden</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-custom.html" class="menu-link">Custom</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item">
                  <a href="landing-page.html" class="menu-link"><span class="menu-icon fas fa-rocket"></span> <span class="menu-text">Landing Page</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-header -->
                <li class="menu-header">Interfaces </li><!-- /.menu-header -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Components</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="component-general.html" class="menu-link">General</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-icons.html" class="menu-link">Icons</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-rich-media.html" class="menu-link">Rich Media</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-list-views.html" class="menu-link">List Views</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-sortable-nestable.html" class="menu-link">Sortable & Nestable</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-activity.html" class="menu-link">Activity</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-steps.html" class="menu-link">Steps</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-tasks.html" class="menu-link">Tasks</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-metrics.html" class="menu-link">Metrics</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-pencil"></span> <span class="menu-text">Forms</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="form-basic.html" class="menu-link">Basic Elements</a>
                    </li>
                    <li class="menu-item">
                      <a href="form-autocompletes.html" class="menu-link">Autocompletes</a>
                    </li>
                    <li class="menu-item">
                      <a href="form-pickers.html" class="menu-link">Pickers</a>
                    </li>
                    <li class="menu-item">
                      <a href="form-editors.html" class="menu-link">Editors</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-active has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span> <span class="menu-text">Tables</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item has-active">
                      <a href="table-basic.html" class="menu-link">Basic Table</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-datatables.html" class="menu-link">Datatables</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-responsive-datatables.html" class="menu-link">Responsive Datatables</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-filters-datatables.html" class="menu-link">Filter Columns</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-bar-chart"></span> <span class="menu-text">Collections</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Chart.js</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="collection-chartjs-line.html" class="menu-link">Line</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-bar.html" class="menu-link">Bar</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-radar-scatter.html" class="menu-link">Radar & Scatter</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-others.html" class="menu-link">Others</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="collection-flot-charts.html" class="menu-link">Flot</a>
                    </li>
                    <li class="menu-item">
                      <a href="collection-inline-charts.html" class="menu-link">Inline Charts</a>
                    </li>
                    <li class="menu-item">
                      <a href="collection-jqvmap.html" class="menu-link">Vector Map</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span> <span class="menu-text">Level Menu</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="#" class="menu-link">Menu Item</a>
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Menu Item</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child Item</a>
                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child Item</a>
                        </li>
                        <li class="menu-item has-child">
                          <a href="#" class="menu-link">Child Item</a> <!-- grand child menu -->
                          <ul class="menu">
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                          </ul><!-- /grand child menu -->
                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child Item</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="#" class="menu-link">Menu Item</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->
          <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
          </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <!-- .breadcrumb -->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tables</a>
                    </li>
                  </ol>
                </nav><!-- /.breadcrumb -->
                <!-- floating action -->
                <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->
                <!-- title and toolbar -->
                <div class="d-md-flex align-items-md-start">
                  <h1 class="page-title mr-sm-auto"> Basic Table </h1><!-- .btn-toolbar -->
                  <div class="btn-toolbar">
                    <button type="button" class="btn btn-light"><i class="oi oi-data-transfer-download"></i> <span class="ml-1">Export</span></button> <button type="button" class="btn btn-light"><i class="oi oi-data-transfer-upload"></i> <span class="ml-1">Import</span></button>
                    <div class="dropdown">
                      <button type="button" class="btn btn-light" data-toggle="dropdown"><span>More</span> <span class="fa fa-caret-down"></span></button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-arrow"></div><a href="#" class="dropdown-item">Add tasks</a> <a href="#" class="dropdown-item">Invite members</a>
                        <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Share</a> <a href="#" class="dropdown-item">Archive</a> <a href="#" class="dropdown-item">Remove</a>
                      </div>
                    </div>
                  </div><!-- /.btn-toolbar -->
                </div><!-- /title and toolbar -->
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .card -->
                <div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header">
                    <!-- .nav-tabs -->
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#tab1">All</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab2">Ongoing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab3">Completed</a>
                      </li>
                    </ul><!-- /.nav-tabs -->
                  </div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form-group -->
                    <div class="form-group">
                      <!-- .input-group -->
                      <div class="input-group input-group-alt">
                        <!-- .input-group-prepend -->
                        <div class="input-group-prepend">
                          <select class="custom-select">
                            <option selected> Filter By </option>
                            <option value="1"> Tags </option>
                            <option value="2"> Vendor </option>
                            <option value="3"> Variants </option>
                            <option value="4"> Prices </option>
                            <option value="5"> Sales </option>
                          </select>
                        </div><!-- /.input-group-prepend -->
                        <!-- .input-group -->
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                          </div><input type="text" class="form-control" placeholder="Search record">
                        </div><!-- /.input-group -->
                      </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <!-- .table-responsive -->
                    <div class="text-muted"> Showing 1 to 10 of 1,000 entries </div>
                    <div class="table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <!-- thead -->
                        <thead>
                          <tr>
                            <th colspan="2" style="min-width:320px">
                              <div class="thead-dd dropdown">
                                <span class="custom-control custom-control-nolabel custom-checkbox"><input type="checkbox" class="custom-control-input" id="check-handle"> <label class="custom-control-label" for="check-handle"></label></span>
                                <div class="thead-btn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="fa fa-caret-down"></span>
                                </div>
                                <div class="dropdown-menu">
                                  <div class="dropdown-arrow"></div><a class="dropdown-item" href="#">Select all</a> <a class="dropdown-item" href="#">Unselect all</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Bulk remove</a> <a class="dropdown-item" href="#">Bulk edit</a> <a class="dropdown-item" href="#">Separate actions</a>
                                </div>
                              </div>
                            </th>
                            <th> Inventory </th>
                            <th> Variants </th>
                            <th> Prices </th>
                            <th> Sales </th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                          </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p3"> <label class="custom-control-label" for="p3"></label>
                              </div>
                            </td>
                            <td>
                              <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-1.jpg" alt="Card image cap"></a> <a href="#">Tomato - Green</a>
                            </td>
                            <td class="align-middle"> 329 </td>
                            <td class="align-middle"> 4 </td>
                            <td class="align-middle"> $31.70 </td>
                            <td class="align-middle"> 796 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p4"> <label class="custom-control-label" for="p4"></label>
                              </div>
                            </td>
                            <td>
                              <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-3.jpg" alt="Card image cap"></a> <a href="#">Quiche Assorted</a>
                            </td>
                            <td class="align-middle"> 169 </td>
                            <td class="align-middle"> 1 </td>
                            <td class="align-middle"> $34.41 </td>
                            <td class="align-middle"> 1824 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p5"> <label class="custom-control-label" for="p5"></label>
                              </div>
                            </td>
                            <td>
                              <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-5.jpg" alt="Card image cap"></a> <a href="#">Cookies Oatmeal Raisin</a>
                            </td>
                            <td class="align-middle"> 155 </td>
                            <td class="align-middle"> 2 </td>
                            <td class="align-middle"> $39.26 </td>
                            <td class="align-middle"> 366 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p6"> <label class="custom-control-label" for="p6"></label>
                              </div>
                            </td>
                            <td>
                              <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-7.jpg" alt="Card image cap"></a> <a href="#">Lemonade - Mandarin, 591 Ml</a>
                            </td>
                            <td class="align-middle"> 391 </td>
                            <td class="align-middle"> 3 </td>
                            <td class="align-middle"> $34.03 </td>
                            <td class="align-middle"> 921 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p7"> <label class="custom-control-label" for="p7"></label>
                              </div>
                            </td>
                            <td>
                              <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-2.jpg" alt="Card image cap"></a> <a href="#">Sour Puss - Tangerine</a>
                            </td>
                            <td class="align-middle"> 368 </td>
                            <td class="align-middle"> 4 </td>
                            <td class="align-middle"> $32.68 </td>
                            <td class="align-middle"> 1216 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p8"> <label class="custom-control-label" for="p8"></label>
                              </div>
                            </td>
                            <td>
                              <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-6.jpg" alt="Card image cap"></a> <a href="#">Scallops - 20/30</a>
                            </td>
                            <td class="align-middle"> 345 </td>
                            <td class="align-middle"> 4 </td>
                            <td class="align-middle"> $29.34 </td>
                            <td class="align-middle"> 883 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p9"> <label class="custom-control-label" for="p9"></label>
                              </div>
                            </td>
                            <td>
                              <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-4.jpg" alt="Card image cap"></a> <a href="#">Skirt - 29 Foot</a>
                            </td>
                            <td class="align-middle"> 432 </td>
                            <td class="align-middle"> 3 </td>
                            <td class="align-middle"> $23.50 </td>
                            <td class="align-middle"> 854 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p10"> <label class="custom-control-label" for="p10"></label>
                              </div>
                            </td>
                            <td>
                              <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-8.jpg" alt="Card image cap"></a> <a href="#">Tea - Grapefruit Green Tea</a>
                            </td>
                            <td class="align-middle"> 461 </td>
                            <td class="align-middle"> 6 </td>
                            <td class="align-middle"> $29.09 </td>
                            <td class="align-middle"> 1694 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p11"> <label class="custom-control-label" for="p11"></label>
                              </div>
                            </td>
                            <td>
                              <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-6.jpg" alt="Card image cap"></a> <a href="#">Pecan Raisin - Tarts</a>
                            </td>
                            <td class="align-middle"> 235 </td>
                            <td class="align-middle"> 1 </td>
                            <td class="align-middle"> $31.28 </td>
                            <td class="align-middle"> 353 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p12"> <label class="custom-control-label" for="p12"></label>
                              </div>
                            </td>
                            <td>
                              <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-5.jpg" alt="Card image cap"></a> <a href="#">Wine - Chateau Bonnet</a>
                            </td>
                            <td class="align-middle"> 113 </td>
                            <td class="align-middle"> 2 </td>
                            <td class="align-middle"> $22.38 </td>
                            <td class="align-middle"> 1281 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                        </tbody><!-- /tbody -->
                      </table><!-- /.table -->
                    </div><!-- /.table-responsive -->
                    <!-- .pagination -->
                    <ul class="pagination justify-content-center mt-4">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fa fa-lg fa-angle-left"></i></a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">...</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">13</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">14</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">15</a>
                      </li>
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">...</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">24</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#"><i class="fa fa-lg fa-angle-right"></i></a>
                      </li>
                    </ul><!-- /.pagination -->
                  </div><!-- /.card-body -->
                </div><!-- /.card -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h2 class="section-title"> Nested Rows </h2>
                </div><!-- /.section-block -->
                <!-- .card -->
                <div class="card card-fluid">
                  <!-- .card-body -->
                  <div class="card-body">
                    <div class="table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <!-- thead -->
                        <thead>
                          <tr>
                            <th colspan="3" style="min-width: 240px">
                              <div class="thead-dd dropdown">
                                <span class="custom-control custom-control-nolabel custom-checkbox"><input type="checkbox" class="custom-control-input" id="check-handle2"> <label class="custom-control-label" for="check-handle2"></label></span>
                                <div class="thead-btn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="fa fa-caret-down"></span>
                                </div>
                                <div class="dropdown-menu">
                                  <div class="dropdown-arrow"></div><a class="dropdown-item" href="#">Select all</a> <a class="dropdown-item" href="#">Unselect all</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Bulk remove</a> <a class="dropdown-item" href="#">Bulk edit</a> <a class="dropdown-item" href="#">Separate actions</a>
                                </div>
                              </div>
                            </th>
                            <th> Bill </th>
                            <th> Status </th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                          </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cid5743"> <label class="custom-control-label" for="cid5743"></label>
                              </div>
                            </td>
                            <td class="align-middle px-0" style="width: 1.5rem">
                              <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-cid5743"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                            </td>
                            <td class="align-middle">
                              <a href="#">Opentech</a>
                            </td>
                            <td class="align-middle"> $0.00 </td>
                            <td class="align-middle">
                              <span class="badge badge-subtle badge-success">Completed</span>
                            </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr class="row-details bg-light collapse" id="details-cid5743">
                            <td colspan="6">
                              <!-- .row -->
                              <div class="row">
                                <!-- .col -->
                                <div class="col-md-auto text-center">
                                  <div class="tile tile-xl tile-circle bg-purple mb-2"> O </div>
                                  <h3 class="card-title mb-4"> Opentech </h3>
                                </div><!-- /.col -->
                                <!-- .col -->
                                <div class="col-md-7">
                                  <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td> Contact </td>
                                        <td> Lori Burns </td>
                                      </tr>
                                      <tr>
                                        <td> Email </td>
                                        <td> loriburns@example.com </td>
                                      </tr>
                                      <tr>
                                        <td> Phone </td>
                                        <td> (381) 765 6879 </td>
                                      </tr>
                                      <tr>
                                        <td> Address </td>
                                        <td> 983 Kunde Glens, Pourosmouth, AK 68019-8335 </td>
                                      </tr>
                                      <tr>
                                        <td> Location </td>
                                        <td> Los Angeles, United States </td>
                                      </tr>
                                      <tr>
                                        <td> Joined </td>
                                        <td> 2018/05/23 </td>
                                      </tr>
                                      <tr>
                                        <td> Last active </td>
                                        <td> 2 hours ago </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div><!-- /.col -->
                                <!-- .col -->
                                <div class="col">
                                  <!-- .publisher -->
                                  <div class="publisher keep-focus focus">
                                    <label for="publisherInput85743" class="publisher-label">Send a message to client</label> <!-- .publisher-input -->
                                    <div class="publisher-input">
                                      <textarea id="publisherInput85743" class="form-control" placeholder="Write a message"></textarea>
                                    </div><!-- /.publisher-input -->
                                    <!-- .publisher-actions -->
                                    <div class="publisher-actions align-items-center">
                                      <!-- .publisher-tools -->
                                      <div class="publisher-tools mr-auto">
                                        <div class="btn btn-light btn-icon fileinput-button">
                                          <i class="fa fa-paperclip"></i> <input type="file" id="attachment85743[]" name="attachment85743[]" multiple>
                                        </div><button type="button" class="btn btn-light btn-icon"><i class="far fa-smile"></i></button>
                                      </div><!-- /.publisher-tools -->
                                      <div class="custom-control custom-control-inline custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="copymsg5743" checked> <label class="custom-control-label" for="copymsg5743">Send me a copy</label>
                                      </div><button type="submit" class="btn btn-primary">Send</button>
                                    </div><!-- /.publisher-actions -->
                                  </div><!-- /.publisher -->
                                </div><!-- /.col -->
                              </div><!-- /.row -->
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cid5476"> <label class="custom-control-label" for="cid5476"></label>
                              </div>
                            </td>
                            <td class="align-middle px-0" style="width: 1.5rem">
                              <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-cid5476"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                            </td>
                            <td class="align-middle">
                              <a href="#">Codehow</a>
                            </td>
                            <td class="align-middle"> $7,625.00 </td>
                            <td class="align-middle">
                              <span class="badge badge-subtle badge-warning">On Going</span>
                            </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr class="row-details bg-light collapse" id="details-cid5476">
                            <td colspan="6">
                              <!-- .row -->
                              <div class="row">
                                <!-- .col -->
                                <div class="col-md-auto text-center">
                                  <div class="tile tile-xl tile-circle bg-pink mb-2"> C </div>
                                  <h3 class="card-title mb-4"> Codehow </h3>
                                </div><!-- /.col -->
                                <!-- .col -->
                                <div class="col-md-7">
                                  <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td> Contact </td>
                                        <td> Zachary Hayes </td>
                                      </tr>
                                      <tr>
                                        <td> Email </td>
                                        <td> zachary90@example.com </td>
                                      </tr>
                                      <tr>
                                        <td> Phone </td>
                                        <td> (783) 482 6904 </td>
                                      </tr>
                                      <tr>
                                        <td> Address </td>
                                        <td> 983 Kunde Glens, Pourosmouth, AK 68019-8335 </td>
                                      </tr>
                                      <tr>
                                        <td> Location </td>
                                        <td> Mexico City, Mexico </td>
                                      </tr>
                                      <tr>
                                        <td> Joined </td>
                                        <td> 2018/05/23 </td>
                                      </tr>
                                      <tr>
                                        <td> Last active </td>
                                        <td> 2 hours ago </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div><!-- /.col -->
                                <!-- .col -->
                                <div class="col">
                                  <!-- .publisher -->
                                  <div class="publisher keep-focus focus">
                                    <label for="publisherInput85476" class="publisher-label">Send a message to client</label> <!-- .publisher-input -->
                                    <div class="publisher-input">
                                      <textarea id="publisherInput85476" class="form-control" placeholder="Write a message"></textarea>
                                    </div><!-- /.publisher-input -->
                                    <!-- .publisher-actions -->
                                    <div class="publisher-actions align-items-center">
                                      <!-- .publisher-tools -->
                                      <div class="publisher-tools mr-auto">
                                        <div class="btn btn-light btn-icon fileinput-button">
                                          <i class="fa fa-paperclip"></i> <input type="file" id="attachment85476[]" name="attachment85476[]" multiple>
                                        </div><button type="button" class="btn btn-light btn-icon"><i class="far fa-smile"></i></button>
                                      </div><!-- /.publisher-tools -->
                                      <div class="custom-control custom-control-inline custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="copymsg5476" checked> <label class="custom-control-label" for="copymsg5476">Send me a copy</label>
                                      </div><button type="submit" class="btn btn-primary">Send</button>
                                    </div><!-- /.publisher-actions -->
                                  </div><!-- /.publisher -->
                                </div><!-- /.col -->
                              </div><!-- /.row -->
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cid4423"> <label class="custom-control-label" for="cid4423"></label>
                              </div>
                            </td>
                            <td class="align-middle px-0" style="width: 1.5rem">
                              <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-cid4423"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                            </td>
                            <td class="align-middle">
                              <a href="#">Ron-tech</a>
                            </td>
                            <td class="align-middle"> $0.00 </td>
                            <td class="align-middle">
                              <span class="badge badge-subtle badge-success">Completed</span>
                            </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr class="row-details bg-light collapse" id="details-cid4423">
                            <td colspan="6">
                              <!-- .row -->
                              <div class="row">
                                <!-- .col -->
                                <div class="col-md-auto text-center">
                                  <div class="tile tile-xl tile-circle bg-red mb-2"> R </div>
                                  <h3 class="card-title mb-4"> Ron-tech </h3>
                                </div><!-- /.col -->
                                <!-- .col -->
                                <div class="col-md-7">
                                  <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td> Contact </td>
                                        <td> Nancy Knight </td>
                                      </tr>
                                      <tr>
                                        <td> Email </td>
                                        <td> nancy-knight@example.com </td>
                                      </tr>
                                      <tr>
                                        <td> Phone </td>
                                        <td> (662) 753 5165 </td>
                                      </tr>
                                      <tr>
                                        <td> Address </td>
                                        <td> 983 Kunde Glens, Pourosmouth, AK 68019-8335 </td>
                                      </tr>
                                      <tr>
                                        <td> Location </td>
                                        <td> Pekalongan, Indonesia </td>
                                      </tr>
                                      <tr>
                                        <td> Joined </td>
                                        <td> 2018/05/23 </td>
                                      </tr>
                                      <tr>
                                        <td> Last active </td>
                                        <td> 2 hours ago </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div><!-- /.col -->
                                <!-- .col -->
                                <div class="col">
                                  <!-- .publisher -->
                                  <div class="publisher keep-focus focus">
                                    <label for="publisherInput84423" class="publisher-label">Send a message to client</label> <!-- .publisher-input -->
                                    <div class="publisher-input">
                                      <textarea id="publisherInput84423" class="form-control" placeholder="Write a message"></textarea>
                                    </div><!-- /.publisher-input -->
                                    <!-- .publisher-actions -->
                                    <div class="publisher-actions align-items-center">
                                      <!-- .publisher-tools -->
                                      <div class="publisher-tools mr-auto">
                                        <div class="btn btn-light btn-icon fileinput-button">
                                          <i class="fa fa-paperclip"></i> <input type="file" id="attachment84423[]" name="attachment84423[]" multiple>
                                        </div><button type="button" class="btn btn-light btn-icon"><i class="far fa-smile"></i></button>
                                      </div><!-- /.publisher-tools -->
                                      <div class="custom-control custom-control-inline custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="copymsg4423" checked> <label class="custom-control-label" for="copymsg4423">Send me a copy</label>
                                      </div><button type="submit" class="btn btn-primary">Send</button>
                                    </div><!-- /.publisher-actions -->
                                  </div><!-- /.publisher -->
                                </div><!-- /.col -->
                              </div><!-- /.row -->
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cid6938"> <label class="custom-control-label" for="cid6938"></label>
                              </div>
                            </td>
                            <td class="align-middle px-0" style="width: 1.5rem">
                              <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-cid6938"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                            </td>
                            <td class="align-middle">
                              <a href="#">Groovestreet</a>
                            </td>
                            <td class="align-middle"> $0.00 </td>
                            <td class="align-middle">
                              <span class="badge badge-subtle badge-success">Completed</span>
                            </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr class="row-details bg-light collapse" id="details-cid6938">
                            <td colspan="6">
                              <!-- .row -->
                              <div class="row">
                                <!-- .col -->
                                <div class="col-md-auto text-center">
                                  <div class="tile tile-xl tile-circle bg-orange mb-2"> G </div>
                                  <h3 class="card-title mb-4"> Groovestreet </h3>
                                </div><!-- /.col -->
                                <!-- .col -->
                                <div class="col-md-7">
                                  <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td> Contact </td>
                                        <td> Rebecca Stewart </td>
                                      </tr>
                                      <tr>
                                        <td> Email </td>
                                        <td> rebecca-95@example.com </td>
                                      </tr>
                                      <tr>
                                        <td> Phone </td>
                                        <td> (511) 216 7617 </td>
                                      </tr>
                                      <tr>
                                        <td> Address </td>
                                        <td> 983 Kunde Glens, Pourosmouth, AK 68019-8335 </td>
                                      </tr>
                                      <tr>
                                        <td> Location </td>
                                        <td> London, United Kingdom </td>
                                      </tr>
                                      <tr>
                                        <td> Joined </td>
                                        <td> 2018/05/23 </td>
                                      </tr>
                                      <tr>
                                        <td> Last active </td>
                                        <td> 2 hours ago </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div><!-- /.col -->
                                <!-- .col -->
                                <div class="col">
                                  <!-- .publisher -->
                                  <div class="publisher keep-focus focus">
                                    <label for="publisherInput86938" class="publisher-label">Send a message to client</label> <!-- .publisher-input -->
                                    <div class="publisher-input">
                                      <textarea id="publisherInput86938" class="form-control" placeholder="Write a message"></textarea>
                                    </div><!-- /.publisher-input -->
                                    <!-- .publisher-actions -->
                                    <div class="publisher-actions align-items-center">
                                      <!-- .publisher-tools -->
                                      <div class="publisher-tools mr-auto">
                                        <div class="btn btn-light btn-icon fileinput-button">
                                          <i class="fa fa-paperclip"></i> <input type="file" id="attachment86938[]" name="attachment86938[]" multiple>
                                        </div><button type="button" class="btn btn-light btn-icon"><i class="far fa-smile"></i></button>
                                      </div><!-- /.publisher-tools -->
                                      <div class="custom-control custom-control-inline custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="copymsg6938" checked> <label class="custom-control-label" for="copymsg6938">Send me a copy</label>
                                      </div><button type="submit" class="btn btn-primary">Send</button>
                                    </div><!-- /.publisher-actions -->
                                  </div><!-- /.publisher -->
                                </div><!-- /.col -->
                              </div><!-- /.row -->
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cid6796"> <label class="custom-control-label" for="cid6796"></label>
                              </div>
                            </td>
                            <td class="align-middle px-0" style="width: 1.5rem">
                              <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-cid6796"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                            </td>
                            <td class="align-middle">
                              <a href="#">Bioplex et Chandon</a>
                            </td>
                            <td class="align-middle"> $3,142.00 </td>
                            <td class="align-middle">
                              <span class="badge badge-subtle badge-warning">On Going</span>
                            </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr class="row-details bg-light collapse" id="details-cid6796">
                            <td colspan="6">
                              <!-- .row -->
                              <div class="row">
                                <!-- .col -->
                                <div class="col-md-auto text-center">
                                  <div class="tile tile-xl tile-circle bg-yellow mb-2"> B </div>
                                  <h3 class="card-title mb-4"> Bioplex et Chandon </h3>
                                </div><!-- /.col -->
                                <!-- .col -->
                                <div class="col-md-7">
                                  <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td> Contact </td>
                                        <td> James Harris </td>
                                      </tr>
                                      <tr>
                                        <td> Email </td>
                                        <td> james_harris@example.com </td>
                                      </tr>
                                      <tr>
                                        <td> Phone </td>
                                        <td> (370) 570 8122 </td>
                                      </tr>
                                      <tr>
                                        <td> Address </td>
                                        <td> 983 Kunde Glens, Pourosmouth, AK 68019-8335 </td>
                                      </tr>
                                      <tr>
                                        <td> Location </td>
                                        <td> Hyderabad, India </td>
                                      </tr>
                                      <tr>
                                        <td> Joined </td>
                                        <td> 2018/05/23 </td>
                                      </tr>
                                      <tr>
                                        <td> Last active </td>
                                        <td> 2 hours ago </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div><!-- /.col -->
                                <!-- .col -->
                                <div class="col">
                                  <!-- .publisher -->
                                  <div class="publisher keep-focus focus">
                                    <label for="publisherInput86796" class="publisher-label">Send a message to client</label> <!-- .publisher-input -->
                                    <div class="publisher-input">
                                      <textarea id="publisherInput86796" class="form-control" placeholder="Write a message"></textarea>
                                    </div><!-- /.publisher-input -->
                                    <!-- .publisher-actions -->
                                    <div class="publisher-actions align-items-center">
                                      <!-- .publisher-tools -->
                                      <div class="publisher-tools mr-auto">
                                        <div class="btn btn-light btn-icon fileinput-button">
                                          <i class="fa fa-paperclip"></i> <input type="file" id="attachment86796[]" name="attachment86796[]" multiple>
                                        </div><button type="button" class="btn btn-light btn-icon"><i class="far fa-smile"></i></button>
                                      </div><!-- /.publisher-tools -->
                                      <div class="custom-control custom-control-inline custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="copymsg6796" checked> <label class="custom-control-label" for="copymsg6796">Send me a copy</label>
                                      </div><button type="submit" class="btn btn-primary">Send</button>
                                    </div><!-- /.publisher-actions -->
                                  </div><!-- /.publisher -->
                                </div><!-- /.col -->
                              </div><!-- /.row -->
                            </td>
                          </tr><!-- /tr -->
                        </tbody><!-- /tbody -->
                      </table><!-- /.table -->
                    </div><!-- /.table-responsive -->
                  </div><!-- /.card-body -->
                </div><!-- /.card -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h2 class="section-title"> Inside Modal </h2><!-- Button trigger modal -->
                  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalTable">Table in modal</button>
                </div><!-- /.section-block -->
                <!-- Modal -->
                <div class="modal fade" id="modalTable" tabindex="-1" role="dialog" aria-labelledby="modalTableLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 id="modalTableLabel" class="modal-title"> Result for <em>"lorem ipsume dolor"</em>
                        </h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      </div>
                      <div class="modal-body p-0">
                        <!-- .table -->
                        <table class="table table-striped">
                          <!-- thead -->
                          <thead class="thead-">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Close</button>
                        <nav aria-label="Page navigation">
                          <ul class="pagination mb-0">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div><!-- /.modal -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h2 class="section-title"> Table Variants </h2>
                </div><!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-header -->
                      <div class="card-header border-0">
                        <div class="d-flex align-items-center">
                          <span class="mr-auto">Hoverable</span>
                          <div class="dropdown">
                            <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <div class="dropdown-arrow"></div><a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Archive</a> <a href="#" class="dropdown-item">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-hover">
                          <!-- thead -->
                          <thead class="thead-">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-header -->
                      <div class="card-header border-0">
                        <div class="d-flex align-items-center">
                          <span class="mr-auto">Striped rows</span>
                          <div class="dropdown">
                            <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <div class="dropdown-arrow"></div><a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Archive</a> <a href="#" class="dropdown-item">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-striped">
                          <!-- thead -->
                          <thead class="thead-">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-header -->
                      <div class="card-header">
                        <div class="d-flex align-items-center">
                          <span class="mr-auto">Bordered</span> <button type="button" class="btn btn-icon btn-light"><i class="fa fa-copy"></i></button> <button type="button" class="btn btn-icon btn-light"><i class="fa fa-download"></i></button>
                        </div>
                      </div><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-bordered">
                          <!-- thead -->
                          <thead class="thead-">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-header -->
                      <div class="card-header border-0">
                        <div class="d-flex align-items-center">
                          <span class="mr-auto">Condensed</span> <button type="button" class="btn btn-icon btn-light"><i class="fa fa-copy"></i></button> <button type="button" class="btn btn-icon btn-light"><i class="fa fa-download"></i></button>
                        </div>
                      </div><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-sm mb-0">
                          <!-- thead -->
                          <thead class="thead-">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Sweet Pea Sprouts </td>
                              <td> 478 </td>
                              <td> $32.89 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Spice - Paprika </td>
                              <td> 421 </td>
                              <td> $28.32 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Tea - Lemon Scented </td>
                              <td> 371 </td>
                              <td> $32.83 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                </div><!-- /grid row -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h2 class="section-title"> Head options </h2>
                </div><!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-hover">
                          <!-- thead -->
                          <thead class="thead-light">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-hover">
                          <!-- thead -->
                          <thead class="thead-dark">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                </div><!-- /grid row -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
       <?php 
include 'footer.php';
       ?>