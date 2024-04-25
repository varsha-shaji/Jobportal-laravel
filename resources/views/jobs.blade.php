@auth
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <title>Job portal</title>
    <style>
        *{
        box-sizing:border-box;
        
        text-decoration:none;
     }
     body{
        margin:0;
        padding:0;
        top:0;
     }
     .maincontainer{
        width:100%;
        height:600px;
        background-size:cover;
        margin-top:70px;
     }
     .btn a{
      text-decoration:none;
      color:black;
     }
     .btn {
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  background-color: lightgrey;
  border-radius: 5px;
}


/* You can add more styles for hover, focus, etc. */
.btn:hover {
  background-color: #218838;
}



a {
  color: inherit;
  font-family: inherit;
  font-size: inherit;
  text-decoration: none;
}


#navbar {
   background-color: rgba(0, 0, 0, 0.6);
  color: rgb(13, 26, 38);
  position: fixed;
  top: 0;
  height: 60px;
  line-height: 60px;
  width: 100vw;
  z-index: 10;
}

.nav-wrapper {
  margin: auto;
  text-align: center;
  width: 70%;
}


.logo {
   margin-top:8px;
  float: left;
  margin-left: -150px;
  font-size: 1.5em;
  height: 30px;
  letter-spacing: 1px;
  text-transform: uppercase;
} 

#navbar ul {
  display: inline-block;
  float: right;
  list-style: none;
  /* margin-right: 14px; */
  margin-top: -2px;
  text-align: right;
  transition: transform 0.5s ease-out;
  -webkit-transition: transform 0.5s ease-out;
} 

#navbar li {
  display: inline-block;
}

#navbar li a {
  color: white;
  display: block;
  font-size: 0.7em;
  height: 50px;
  letter-spacing: 1px;
  margin: 0 20px;
  padding: 0 4px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
}

#navbar li a:hover {
  color: red;
  transition: all 1s ease;
  -webkit-transition: all 1s ease;
}
    </style>
</head>
<body>


  
<nav id="navbar" class="">
  <div class="nav-wrapper">
    <!-- Navbar Logo -->
    <div class="logo">
      <!-- Logo Placeholder for Illustration -->
      <a href="/"><img width="150px" height="auto" src="images/logo1.png"></a>
    </div>

    <!-- Navbar Links -->
    <ul id="menu">
    <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/about">About</a>
                        </li>
                       
                       
                       @auth
                       <li class="nav-item">
                           <a class="nav-link" href="/jobs">Jobs</a>
                        </li>
                       <li class="nav-item">
                           <a class="nav-link"> {{ session('user_name') }}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/profile">Profile</a>
                        </li>
                        <li class="nav-item">
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer;color:white">Logout</button>
    </form>
</li>

@else
<li class="nav-item">
                           <a class="nav-link" href="/loginpage">Login/SignIn</a>
                        </li>


                        
                       @endauth
                        
            </ul>
            </div>
        </div>
    </ul>
  </div>
</nav>


  <div class="maincontainer"><br>
  <h1 style="text-align:center;color:blue;">New Job Vacancies</h1>
  <div class="search-form"  style="text-align: right; margin-top: 20px;">
        <form action="/search" method="GET">
          @csrf
            <label for="search" style="margin-right: 30px;">Search:</label>
            <input type="text" id="search" name="search" placeholder="Enter your search term" style="padding: 5px;">
            <button type="submit" style="padding: 5px; background-color: #4CAF50; color: white;margin-right: 30px;">Search</button>
        </form>
    </div>

  <hr><br>
  <div class="app-content content">
      <div class="content-wrapper">
        
        <div class="content-body"><!-- Line Awesome section start -->
        <div class="card-content collapse show">
  
<!-- Header footer section start -->
<section id="header-footer">
    
<div class="row match-height">
@foreach($jobs as $job)
		<div class="col-lg-4 col-md-12">
			<div class="card" style="min-height:300px;margin-bottom:20px;margin-left:30px;">
				<div class="card-body">
					<h4 class="card-title">{{ $job->title }}</h4>
				</div>
				
				<div class="card-body" style="margin-top:-40px;">
					<p class="card-text">{{ $job->description }}</p>
                    <a href="#" class="card-link">Location : </a>
					<a href="#" class="card-link">{{ $job->location }}</a><br>
					<a href="#" class="card-link">Salary : </a>
					<a href="#" class="card-link">{{ $job->salary }}</a><br><br>

                    
         <button class="btn"><a href="/apply/{{$job->id}}">Apply Now</a></button>
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


  </div>
</body>
</html>
@endauth