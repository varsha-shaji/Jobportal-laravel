@auth
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job portal</title>
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">

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
        height:100%;
    background-color:#fff;
       
     }
     .container{
    height:100%;
    margin:0;
}

.contents {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    font-family: Arial, sans-serif;
    margin-top:-410px;
}

.section-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.section-description {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
}

.services{
    height:100%;

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
  <br> <br><br>
<h1 align="center">Profile</h1>
  </div>
  <div class="container" style="margin-top:-300px;">
<div class="contents">
<h2 class="section-title">Name :    {{$user->name}}</h2>
    <p class="section-description"style="font-size:20px;">Email :    {{$user->email}}</p>
    <p class="section-description"style="font-size:20px;">Phone :    {{$user->phone}}</p>
    <p class="section-description"style="font-size:20px;">Experience :    {{$user->experience}}</p>
    <p class="section-description"style="font-size:20px;">Qualification :    {{$user->qualification}}</p>
</div>
<br>

<div class="services" style="margin-top:30px;">

<h3>Applied Jobs</h3><br> <br>


@if($user->applications->count() > 0)
            <div class="card-content collapse show">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Job Title</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->applications as $index => $application)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $application->job->title }}</td>
                                    <td>
    @php
        $text = '';
        if ($application->status == 0) {
            $text = 'PENDING';
        } elseif ($application->status == 1) {
            $text = 'ACCEPTED';
        } else {
            $text = 'DECLINED';
        }
    @endphp
    {{ $text }}
</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <p>No jobs applied yet.</p>
        @endif
        <br><br>
</div>

</body>
</html>
@endauth