@auth
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>new job post</title>
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">


    <style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        .btn-submit {
            background-color: #ea1538;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #c5152e;
        }

    </style>
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
    
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="/adminHome">
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item"><a href="/adminHome"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class=" active nav-item"><a href="/newjob"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Add New Job</span></a>
          </li>
          <li class=" nav-item"><a href="/applicants"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Applicants</span></a>
          </li>
        </ul>
      </div><form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" >Logout</button>
    </form>
      <div class="navigation-background"></div>
    </div>


    <div class="app-content content" style="margin-top:-50px;">
      <div class="content-wrapper">
        
        <div class="content-body"><!-- Bar charts section start -->
          <div class="container">
            <h2>Add New Job Post</h2><br>
            <form  method="POST" action="jobpost">
              @csrf
                <div class="form-group">
                    <label for="title">Job Title</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="description">Job Description</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                </div>
               
                <div class="form-group">
                  <label for="salary">Basic Salary</label>
                  <input type="text" id="salary" name="salary" required>
              </div>
                <div class="form-group">
                    <label for="location">Job Location</label>
                    <input type="text" id="location" name="location" required>
                </div>
                <button type="submit" class="btn-submit" name="sub">Add Job Post</button>
            </form>
        </div>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        
      </div>
    </footer>

  </body>
</html>
@else
    
   return redirect('/loginpage');

@endauth