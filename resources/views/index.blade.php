
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        background-image:url("images/bg1.jpg");
        background-size:cover;
     }
     .container{
    height:500px;
    background-color:#fff;
    margin:0;
}

.content {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    font-family: Arial, sans-serif;
    margin-left:470px;
    margin-top:-410px;
}

.section-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
    text-align:center;
}

.section-description {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
}

.services{
    height:500px;

}
.services .img1{
    height:400px;
    width:900px;
    object-fit:cover;
    margin-left:225px;
    margin-top:50px;
}
.services .img1 img{
    height:400px;
    width:900px;
    border-radius:50px; 
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
         

</body>
  <div class="maincontainer">

  </div>
  <div class="container">
<div class="img">
   <img src="images/about.jpg" alt="">
</div>
<div class="content">
<h2 class="section-title">We find you the job that matches your personality and skills</h2><br><br>
    <p class="section-description"style="font-size:20px;">Discover TimesJob, the ultimate hub where job seekers and employers unite. Our platform is meticulously crafted to simplify the job search, creating a seamless experience for individuals and companies alike. With a laser focus on efficiency, we empower job seekers and organizations to effortlessly discover their ideal counterparts.
    <br><br>
    At TimesJob, our mission is to transform the job search into an effortless journey. We provide a harmonious ecosystem where job seekers and employers can effortlessly identify their perfect fit. By harnessing cutting-edge technology, we redefine how connections are formed, paving the way for mutual success in the professional realm.
</p>
</div>
</div>

<div class="services">
<div class="img1">
  
<img src="images/2.jpeg" alt="">
</div>
<div class="conten">

</div>

</div>
</body>
</html>