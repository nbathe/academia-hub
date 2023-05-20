<?php
@include 'db_config.php';
if(isset($_POST['submit']))
{
  $event_name = $_POST['event_name'];
  $org = $_POST['org'];
  $venue = $_POST['venue'];
  $date = $_POST['date'];
  $domain = $_POST['domain'];
  $category = $_POST['category'];
  $enrollment = $_POST['enrollment'];
  $description = $_POST['description'];
  // $chooseFile = $_POST['chooseFile1'];

  // $target = "images/".basename($_FILES['chooseFile']['name']);
  // $chooseFile = $_FILES['chooseFile']['name'];

  $sql = "INSERT INTO event_info(event_name,org,venue,date,domain,category,enrollment,description) 
          VALUES('$event_name','$org','$venue','$date','$domain','$category','$enrollment','$description')";

  $data = mysqli_query($conn,$sql);
  header('location:events.php');

  // if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
  //   $msg = "Image uploaded successfully";
  // }
  // else{
  //   $msg = "There was an error";
  // }
  // if($data)
  // {
  //   echo "Data inserted into database";
  // }
  // else{
  //   echo "Failed";
  // }
}

?>


<html>
<head>
<title>Publish</title>

<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<link href="css/form_style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

<!-- <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="form_style.css"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Martel+Sans:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"></head>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<style>
   
</style>
<body>
<script>
    
    $('#chooseFile').bind('change', function () {
  var filename = $("#chooseFile").val();
  if (/^\s*/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("No file chosen..."); 
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("./images", "")); 
  }
});

// function myFunction() {
//   var x = document.getElementById("snackbar");
//   x.className = "show";
//   setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
// }
let snackbar = document.getElementById("snackbar");

function myFunction(){
  let toast = document.createElement('div');
  toast.classList.add('toast');
  toast.innerHTML = "success";
  snackbar.appendChild(toast);
}
  

</script>





    <img class="logo" src="logo1.png" >
    <nav class="drop-in" style="background-color: FFF7F8;">
        
        <ul>
            <li><a href="HOMEE_LOGOUT.php">Home</a></li>
            <li><a href="categories.php">Category</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="logout.php">Logout</a></li>
            
        </ul>
    </nav>
  <div class="container2">


            <form action="#"  method= POST class="drop-in-2">   
             <section id="form1">
               <div class="event-text"><p>Publish your event</p></div>

                 
              <input type="text" name="event_name" placeholder= "Name of event" size="15" required />   
  
              <input type="text" name="org" placeholder="Organization" size="15" required />   
   
              <input type="text" name="venue" placeholder="Venue" size="15"required />   
     
              <input type="text" name="date" placeholder= "dd/mm/yyy" size="15" required /> 
      
              <select id="select" name="domain" id="domain">
                <option value="" disabled selected>Domain</option>
                <option value="blockchain">Blockchain</option>
                <option value="ai">Artificial Intelligence</option>
                <option value="ml">Machine Learning</option>
                <option value="medical">Medical</option>
                <option value="Sports">Sports</option>
                <option value="cultural">Cultural</option>
                <option value="cultural">Robotics</option>
              </select>
  
            
              <select required id="select" name="category" id="category">
                <option style="color: rgb(117, 117, 117);" value="" disabled selected hidden>Category of event</option>
                <option style="color: rgb(0, 0, 0);" value="webinar">Department Event</option>
                <option style="color: rgb(0, 0, 0);"value="hackathon">Club event</option>
                <option style="color: rgb(0, 0, 0);"value="seminar">Seminar</option>
                <option style="color: rgb(0, 0, 0);"value="club">Hackathon</option>
                <option style="color: rgb(0, 0, 0);"value="department">Webinar</option>
                <option style="color: rgb(0, 0, 0);"value="fest">Fests</option>
                <option style="color: rgb(0, 0, 0);"value="sports">Sports</option>
              </select>

              <input type="text" name="enrollment" placeholder= "Enrollment Link" size="15" required />
         
    
             
              <textarea name="description" placeholder="Description">  
              </textarea> 
              
              <!-- <div class="file-upload">
                <div class="file-select">
                  <div class="file-select-button" id="fileName">Choose File</div>
                  <div class="file-select-name" id="noFile">No file chosen...</div> 
                  

                </div>
              </div> -->
              <input type="file" name="chooseFile" id="chooseFile" value="chooseFile">


            
                
                  <button  type="submit" name="submit"  class="registerbtn">Submit</button>
                  <div id="snackbar"></div>
                </form>
        </section>
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