@auth
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Employee Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="/adminHome"><img class="brand-logo" alt="" src="images/logo2.png"/>
             
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="active"><a href="/adminHome"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class=" nav-item"><a href="/newjob"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Add New Job</span></a>
          </li>
          <li class=" nav-item"><a href="/applicants"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Applicants</span></a>
          </li>
        </ul>
      </div>
      <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" >Logout</button>
    </form>
      <div class="navigation-background"></div>
    </div>


    <div class="app-content content">
      <div class="content-wrapper">
        
        <div class="content-body"><!-- Line Awesome section start -->
        <div class="card-content collapse show">
  
<!-- Header footer section start -->
<section id="header-footer">
    
<div class="row match-height">
@foreach($jobs as $job)
		<div class="col-lg-4 col-md-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">{{ $job->title }}</h4>
				</div>
				
				<div class="card-body" style="margin-top:-30px;">
					<p class="card-text">{{ $job->description }}</p>
                    <a href="#" class="card-link">Location : </a>
					<a href="#" class="card-link">{{ $job->location }}</a><br>
					<a href="#" class="card-link">Salary : </a>
					<a href="#" class="card-link">{{ $job->salary }}</a>
				</div>
				
			</div>
		</div>

    @endforeach
        </div>
</section>
			</div>
        </div>
      </div>
    </div>

    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        
      </div>
    </footer>

  </body>
</html>

@else
    
   return redirect('/loginpage');

@endauth