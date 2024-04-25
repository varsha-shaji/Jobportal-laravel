
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script>
		     $("document").ready(function() {
               
                $(".image1").hide();
                $(".image2").show();
			    $("#login").hide();
			    $("#register").show();
            });
		  </script>
        
    <style>
     *{
        box-sizing:border-box;
        
     }
     body{
        
        
        background-image:url("images/bg2.jpg");
        background-size:cover;
        
     }

     .container{
    background-color: #f2f2f2;
    border-radius:5px;
    margin:5% auto;
    width:600px;
    padding:20px;
}

.image1{
    height:500px;
    width:450px;
    background-color:#fff;
    border-radius:10px;
    padding:10px;
    margin-left:-10px;
    margin-top:-10px;
}
.image1 img{
    height:480px;
    width:450px;
}

.image2{
    height:500px;
    width:450px;
    background-color:#fff;
    border-radius:10px;
    padding:10px;
    margin-left:80px;
    margin-top:-11px;
}
.image2 img{
    height:470px;
    width:430px;
}

.forms{
    height:500px;
    width:900px;
    background-color:#fff;
    margin:130px 0 0 225px;
    position:fixed;
    border-radius:10px;
    padding:10px;
    display:flex;
}
.btn{
    width:250px;
    height: 50px;
    margin-left:80px;
    margin-top:15px;
    margin-bottom:20px;
    position:relative;
    background: #ea1538;
    border-radius: 30px;
}
.button{
     text-align: center;
     border:0;
     background:transparent;
     padding:15px;
     margin-bottom:15px;
     border-radius:30px;
     padding-left:45px;
     font-size:15px;
     outline:none;
     font-weight:bold;
}
.button a{
    text-decoration: none;
    color:black;
}
.logform {
          padding-left:50px;
}
.logform input{
    padding:1px 4px 4px 4px;
}
.btns{
         outline:none;
         border-top:none;
         border-left:none;
         border-right:none;
         border-bottom:1px solid black;
         height:40px;
         width:300px;
         margin-top:-20px;
}
.sub{
         outline:none;
         border-radius: 30px;
         border:0;
         background-color: #ea1538;
         height:40px;
         width:300px;
         font-weight:bold;
         padding-top: 50px;
}
.error{
    color:red;
    font-family:Comic Sans MS;
    font-weight:bold;
    font-size:12px;
}
#pop{
    border:none;
    outline:none;
    background:transparent;
}
.sess{
    text-transform:uppercase;
    color:white;
    font-size: 15px;
    font-weight:600;
    border-bottom:2px solid transparent;
    transition: all .55s ease;
}
/*content*/

#btn{
    width:140px;
    height:50px;
    background: linear-gradient(to right, #243A6E 50%, #db3232 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    transition: all .5s ease-out;
    color:white;
    font-size:15px;
    font-weight: bold;
    border-radius:50px;
    margin-left:10px;
}
#btn:hover{
    background-position: left bottom;
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
         


     <div class="forms" id="forms">
        <div class="image1">
            <img src="images/Mobile-login.jpg" alt="">
        </div>
                    <div class="popup">
                        <div class="btn">
                            <button class="button" id="log"><a href="/loginpage">Login</a></button>
                            <button class="button" id="reg"><a href="/registerpage">Register</a></button>
                        </div>
                       
            
            
                        <form action="/register" method="POST" id="reg" class="logform">

                            @csrf
                            <table style="min-height:380px;height:auto;">
                                <tr>
                                    <td colspan="2"><input type="text" name="name" id="name" class="btns" placeholder="Name..." required/>
                                 <span id="error_na" class="error"></span></td>
                                </tr>
                            
                                <tr>
                                    <td colspan="2"><input type="email" name="email" id="email" class="btns" placeholder="Email" required/>
                                    <span id="error_em"   class="error"></span></td>
                                </tr>
                             <tr>
                                    <td colspan="2"><input type="text" name="phone" id="phone" class="btns" placeholder="PhoneNo" required/>
                                    <span id="error_ph"  class="error"></span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="text" name="experience" id="exp" class="btns" placeholder="experience"/>
                                    <span id="error_ph"  class="error"></span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="text" name="qualification" id="qualification" class="btns" placeholder="Qualification" />
                                    <span id="error_ph"  class="error"></span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="password" name="password" id="pass" class="btns" placeholder="Password" required/>
                                    
                                    <span id="error_pass"  class="error"></span></td>
                                </tr>
                                
                                <tr>
            
        </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" name="sub" class="sub"  value="Register" id="subbtn"/>
                              </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="image2">
            <img src="images/6333040.jpg" alt="">
        </div>
                </div>

</body>
</html>


