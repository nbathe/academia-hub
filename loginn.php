<?php

@include 'db_config.php';

    session_start();
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pass = md5($_POST['password']);
    

    
        $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    
        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
          
            $row = mysqli_fetch_array($result);
    
            if($row['user_type'] == 'admin')
            {
                $_SESSION['admin_name'] = $row['name'];
                header('location:after_login.php');
            }
            elseif($row['user_type'] == 'user')
            {
                $_SESSION['user_name'] = $row['name'];
                header('location:events.php');
            }
            else{
                $error[] = 'Incorrect email or password!';
            }
            
        }
};


?>


<html>
<head>
<title>Login</title>
<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Martel+Sans:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"></head>
<style>

body{
        background-color: #ffe1e4;
        font-family: 'DM Sans', sans-serif;
    }
.container2 {
    display: flex;
    padding-left: 0%;
    width: 100%;
    height: 700px;
    top: 30%;
  }
  nav{
  width: 100%;
  height: 70px;
  background-color: rgb(255, 255, 255);
  line-height: 50px;
  padding-top: 25px;
}

  .login_form{
    padding-left: 35%;
    padding-top: 5%;
  }
.wrapper{
  overflow: hidden;
  max-width: 390px;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  left: 35%;
  padding-top: 5%;
}
.wrapper .title-text{
  display: flex;
  width: 200%;
}
.wrapper .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
}
.slide-controls label.signup{
  color: #000;
}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 5px;
  background: -webkit-linear-gradient(left, #a445b2, #fa4299);
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
input[type="radio"]{
  display: none;
}
#signup:checked ~ .slider-tab{
  left: 50%;
}
#signup:checked ~ label.signup{
  color: #fff;
  cursor: default;
  user-select: none;
}
#signup:checked ~ label.login{
  color: #000;
}
#login:checked ~ label.signup{
  color: #000;
}
#login:checked ~ label.login{
  cursor: default;
  user-select: none;
}
.wrapper .form-container{
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}

.form-container form .error-msg{
    margin: 10px 0;
    display: block;
    background: crimson;
    color: #FFF;
    border-radius: 5px;
    font-size: 20px;
    padding: 10px;
}
.form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}
.form-inner form .field select{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}

.form-inner form .field input:focus{
  border-color: #fc83bb;
  /* box-shadow: inset 0 0 3px #fb6aae; */
}
.form-inner form .field input::placeholder{
  color: #999;
  transition: all 0.3s ease;
}
form .field input:focus::placeholder{
  color: #b3b3b3;
}
.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: #fa4299;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}
form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #a445b2, #fa4299, #a445b2, #fa4299);
  border-radius: 5px;
  transition: all 0.4s ease;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}


hr {
  width: 0px;
  height: 3px;
  background: var(--underline);
  border: var(--underline);
  margin: 0px;
  transition: width 450ms ease-out;
}
 
</style>
<body>



<div id="abc">

<img class="logo drop-in " src="logo1.png" >
    <nav class="drop-in" >
   
        <ul>
            <li><a href="index.PHP"> Home</a></li>
            <li><a href="HOMEE.php#about">About Us</a></li>
            <li><a onclick="showToast()">Category</a></li>
            <li><a onclick="showToast()">Events</a></li>
            
            
        </ul>
    </nav>

   <!-- Toast message element -->
   <div id="snackbar">First Login/Register</div>

    <!-- Scroll to top -->
    <a href="#" id="scroll" style="display: none;"><span></span></a>

  <div class="container2">
    <div class="login_form drop-in-2"> 
    <div class="wrapper">
       
        <div class="title-text">
           <div class="title login">
              Login Form
           </div>
           <div class="title signup">
              Signup Form
           </div>
        </div>
        <div class="form-container">
           

           <!-- login form-->
           <div class="form-inner">
              <form action="#" class="login" method="post">
              <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>
                 <div class="field">
                    <input type="text" name="email" placeholder="Email Address" required>
                 </div>
                 <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
                 </div>
                 <div class="pass-link">
                    <a href="#">Forgot password?</a>
                 </div>
                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="submit" value="login now">
                 </div>
                 <div class="signup-link">
                    Not a member? <a href="login-signup.php">Signup now</a>
                 </div>
              </form>

           
           </div>
        </div>
     </div>
     </div>
     <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (()=>{
          loginForm.style.marginLeft = "-50%";
          loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (()=>{
          loginForm.style.marginLeft = "0%";
          loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (()=>{
          signupBtn.click();
          return false;
        });
     </script>
    
</div>
        <section id="footer">
            <div class="footer">
            <div class="col">
                <h1>About</h1>
                <ul>
                  <li><a href="#">How it works</a></li>
                  <li><a href="#">Terms and Services</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col">
                <h1>Follow us on</h1>
                <ul>
                  <li style="font-size: 30px;"><a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a><a href="#" class="fa fa-instagram"></a></li>
                </ul>
              </div>
              <div class="col">
                <h1>Get in touch</h1>
                <ul>
                  <li ><a href="#"><i style="font-size: 30px;"class="fa fa-phone"></i>+91 8584200354</a></li>
                  <li><a href="#"><i style="font-size: 25px;" class="fa fa-envelope"></i>academiahub@gmail.com</a></li>
    
                </ul>
              </div>
         </div>
         <p id="copy">Copyright &copy 2023 Academia Hub Team</p>

         </section>
    </body>
    </html>