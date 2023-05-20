<!DOCTYPE html>
<html>
<head>
	<title>Categories Page</title>
<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Martel+Sans:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="js/snackbar.js"></script>
<script src="js/scroll-to-top.js"></script> 
 
 <style>

    body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
    background-color:#ffe1e4;
}


h1 {
	margin: 0;
}

nav{
  width: 100%;
  height: 70px;
  background-color: #FFF7F8;
  line-height: 50px;
  padding-top: 25px;
}


.container2{
    padding-top: 10%;
}
.container2 .event-text {
  top: 20%;
  padding: 0px;
  font-size: 40px;
  position: relative;
  left: 45%;
  float: left;
  font-weight: bold;
}
.container2 .event-text::before{
    content: '';
	position: absolute;
	top: 135%;
    left: -15;
	background-color: #998FCC;
	height: 4px;
	box-sizing: border-box;
	width: 200px;
    
}

.input{
  padding-left: 2%;
  width: 100%;
  padding-top: 100px;
}

#searchQueryInput {
  width: 84%;
  height: 3.2rem;
  background: #ffffff;
  outline: none;
  border: none;
  border-radius: 1.625rem;
  padding: 0 3.5rem 0 1.5rem;
  font-size: 1rem;
}


.column {
  float: left;
  width: 22.91%;
  padding: 50px;
  
}

.row{
  padding-top: 5%;
  padding-left: 2%;
  width: 100%;
  cursor: pointer;
  display: flex;
   
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

#searchQuerySubmit {
  width: 3.5rem;
  height: 2.8rem;
  margin-left: -3.5rem;
  background: none;
  border: none;
  outline: none;

}

#searchQuerySubmit:hover {
  cursor: pointer;
}

main {
	max-width: 960px;
	margin: 0 auto;
	padding: 20px;  
}


h2 {
	margin-top: 0;
  text-align: center;
  padding-bottom: 35px;
}
.b1{
    padding-left: 12.6%;
    padding-top: 0px;
  }

ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

li {
	margin-bottom: 10px;
}




button:hover {   
  opacity: 0.7;

}
.button {
  background-color: #FFC8AC; 
  border: none;
  color: black;
  font-weight: bold;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;

  cursor: pointer;
  border-radius: 1.45rem;
height: 50px;
width: 200px;

}


.button2 {background-color: #CC60FF;
}   
.b1{
  padding-left: 12.6%;
  padding-top: 40px;
}

img{
    
height: 180px;
}


  </style>
</head>
<body>
 
    <img class="logo" src="logo1.png" alt="Italian Trulli">
		<nav class="drop-in">
			<ul>
				<li><a href="HOMEE_LOGOUT.php">Home</a></li>
				<li><a href="#">Category</a></li>
				<li><a href="events.php">Events</a></li>
        <li><a href="HOMEE_LOGOUT.php#about">About Us</a></li>
        <li><a href="logout.php">Logout</a></li>

			</ul>
		</nav>

     <!-- Scroll to top -->
     <a href="#" id="scroll" style="display: none;"><span></span></a>

<div class="container2 drop-in-2">
	
        <div class="event-text"><p> Categories</p></div>
        <main>
		
     
       <center><div class="input"><input id="searchQueryInput" name="searchQueryInput" type="text" placeholder="Search..">
        <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
            <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
            </svg>
          </button></center>
			
			<div class="row">
        <div class="column">
          
          <img src="images/webinar.png" alt="Snow" style="width:100%">
          <div class="b1">      
            <button class="button" onclick="location.href = 'events.php';">Webinar</button>
            </div>
        </div>
        
        
		

		
			
			
        <div class="column">
         
          <img src="images/hackathons.png" alt="Snow" style="width:100%">
          <div class="b1">      
            <button class="button" onclick="location.href = 'events.php';">Hackathon</button>
            </div>
        </div>
        
      
		

    
			
			
        <div class="column">
          
          <img src="images/seminar.png" alt="Snow" style="width:100%; ">
          <div class="b1">      
            <button class="button" onclick="location.href = 'events.php';">Seminar</button>
            </div>
        </div>
        </div>
      
		

    
			
        <div class="row">
        <div class="column">
         
          <img src="images/club.png" alt="Snow" style="width:100%">
          <div class="b1">      
            <button class="button" onclick="location.href = 'events.php';">Club Events</button>
            </div>
        </div>
        
      
		

    
			
      
        <div class="column">
          
          <img src="images/dept.png" alt="Snow" style="width:100%">
          <div class="b1">      
            <button class="button" onclick="location.href = 'events.php';">Department Events</button>
            </div>
        </div>
        
      
		

   
			
        <div class="column">
          
          <img src="images/fests.png" alt="Snow" style="width:100%">
          <div class="b1">      
            <button class="button" onclick="location.href = 'events.php';">Fests</a>
            </div>
        </div>
        
     </div>

 

			
     <div class="row">
      <div class="column" style="margin-left: 32%;">
          
          <img src="images/sports.png" alt="Snow" style="width:40% ">
          <div class="b1">      
            <button class="button" onclick="location.href = 'events.php';">Sports</button>
            </div>
        </div>
        
      </div>
		
	</main>
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