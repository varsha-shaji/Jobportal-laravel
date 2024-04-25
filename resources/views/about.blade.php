
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Timesjob</title>
<style>
.breadcrumb-area {
    position: relative;
    overflow: hidden;
    
    background-image: url("images/aboutbg.jpg"); 
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}


.bg-overlay {
    position: relative;
}

.bg-overlay::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.jarallax {
    /* You can add your jarallax properties here if needed */
}

.breadcrumb-content {
    padding: 100px 0; /* Adjust the padding as needed */
    color: #fff; /* Breadcrumb text color */
}

.page-title {
    font-size: 36px;
    margin-bottom: 20px;
    text-align:center;
}

.breadcrumb {
    margin-bottom: 0;
    background: transparent;
    font-size: 16px;
}

.aboutarea{
    height:500px;
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

.section-list {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin-left: 20px;
    padding-left: 10px;
}

.section-list li {
    margin-bottom: 10px;
    list-style-type: disc;
    margin-left:-20px;
}

.section-list li:before {
    margin-right: 5px;
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
         


    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title">About Us</h2>
                  
                </div>
            </div>
        </div>
    </div>
</section>

  <div class="aboutarea">
<div class="img" style="margin-top:30px;">
   <img src="images/about.jpg" alt="">
</div>
<div class="content">
<h2 class="section-title">Empowering Careers</h2><br><br>
    <p class="section-description"style="font-size:20px;">Welcome to TimesJobs.... Our platform is designed to streamline the job search process and empower employers to find the perfect candidates for their teams. Whether you're a skilled professional seeking new opportunities or an employer in search of top talent, we've got you covered.</p>
    <br><br>
    <div class="subcontainer" style="margin-top:150px;margin-left:-400px;">
    <h2 class="section-title">Our Mission</h2><br><br>
    <p class="section-description">Our mission is to bridge the gap between job seekers and employers, facilitating meaningful connections that drive career growth and business success. We understand the challenges both job seekers and employers face in today's competitive market, and we're dedicated to providing a platform that simplifies the process and enhances the overall experience.</p>
    <br><br>
    <h2 class="section-title">Why Choose Us?</h2><br><br>
    <ul class="section-list">
        <li><b>Comprehensive Job Listings: </b>Our extensive database of job listings covers a wide range of industries, roles, and locations, ensuring that job seekers can explore a diverse array of opportunities.</li>
        <li><b>User-Friendly Interface: </b> We've designed our platform with a user-centric approach, making it easy for both job seekers and employers to navigate and use our features.</li>
        <li><b>Efficient Recruitment: </b>Employers can post job openings, manage applications, and communicate with potential candidates seamlessly through our intuitive employer dashboard.</li>
        <li><b>Expert Support: </b>Our dedicated support team is available to assist you with any inquiries, technical issues, or feedback you may have. We're committed to ensuring your experience on our platform is smooth and successful.</li>
    </ul>
    </div>
    
</div>
  </div>
</body>

</html>

