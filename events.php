<?php
include('db_config.php');
$query = "SELECT id,event_name,org,venue,date,domain,category,enrollment,description,chooseFile FROM event_info ORDER BY STR_TO_DATE(date, '%d/%m/%Y') ASC";

$result = mysqli_query($conn, $query);

// Filter






?>


<html>
<head>
<title>Events</title>
<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Martel+Sans:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"></head>
<script>

console.log('Filtering script running');
const urlParams = new URLSearchParams(window.location.search);
  const selectedValue = urlParams.get('selectedValue');
  
  if (selectedValue) {
    const selectElement = document.getElementById('category');
    selectElement.value = selectedValue;
  }
</script>
<style>
    body{
        background-color: #ffe1e4;
        font-family: 'DM Sans', sans-serif;
    }
a{
  color: rgb(66, 126, 255);; 
  text-decoration: none;

}
nav{
  width: 100%;
  height: 70px;
  background-color: rgba(255, 255, 255, 0.333);
  line-height: 50px;
  padding-top: 25px;
}

.containerr {
 display: grid;
 align-items: center; 
 grid-template-columns: 1fr 1fr 1fr;
 column-gap: 5px;
 max-height:45%;
  overflow: auto;
  display: flex;
}

.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 22%;
  padding: 5px;
}
img {
  max-width: 100%;
  max-height:100%;
}

    .overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  
  margin: 70px auto;
  padding: 20px;
  background: #FFEFE7;
  border-radius: 5px;
  width: 65%;
  height: 350px;
  position: relative;
  transition: all 5s ease-in-out;
}
.popup .row{
  height: 320px;
}
.popup .column{
  height: 320px;
}


.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height:100%;
  overflow: auto;
  text-align: justify;
  padding-right: 30px;

}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
</style>
<body>
<div id="abc">

    <img class="logo" src="logo1.png" >
    <nav class="drop-in" style="background-color: #FFF7F8;">
        
        <ul>
            <li><a href="HOMEE_LOGOUT.php">Home</a></li>
            <li><a href="categories.php">Category</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="HOMEE_LOGOUT.php#about">About Us</a></li>
            <li><a href="logout.php">Logout</a></li>
            
        </ul>
    </nav>

    <div class="container drop-in">
        <div class="event-text"><p>Events</p></div>

       <div class="input"><input id="searchQueryInput" name="searchQueryInput" type="text" onkeyup="myFunction()" placeholder="Search for events..">
        <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
            <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
            </svg>
          </button>

          <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchQueryInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


</script>
          

          <div class="col1">
          <select class="select-items" name="domain" id ="domain" onchange="myFunction2()" >
            <option value="" disabled selected>Domain</option>
            <option value="blockchain">Blockchain</option>
            <option value="ai">Artificial Intelligence</option>
            <option value="ml">Machine Learning</option>
            <option value="medical">Medical</option>
            <option value="Sports">Sports</option>
            <option value="cultural">Cultural</option>
            <option value="english">English Communication</option>
          </select>
          

          
          <select class="select-items" name="category" id="category" onchange="myFunction3()">
            <option value="" disabled selected>Category</option>
            <option value="webinar">Webinar</option>
            <option value="hackathon">Hackathons</option>
            <option value="seminar">Seminar</option>
            <option value="club">Club events</option>
            <option value="department">Department events</option>
            <option value="fest">Fests</option>
            <option value="sports">Sports</option>
          </select>
      
          <select class="select-items" name="city" id="city" onchange="myFunction1()" >
            <option value="" disabled selected>State</option>
            <option value="ahmad">Ahmadnagar</option>
            <option value="akola">Akola</option>
            <option value="amravati">Amravati</option>
            <option value="auranga">Aurangabad</option>
            <option value="bhandara">Bhandara</option>
            <option value="chandra">Chandrapur</option>
            <option value="daulata">Daulatabad</option>
            <option value="jalgaon"> Jalgaon</option>
            <option value="kalyan">Kalyan</option>
            <option value="kolha">Kolhapur</option>
            <option value="mumbai">Mumbai</option>
            <option value="nagpur">Nagpur</option>
            <option value="nanded">Nanded</option>
            <option value="nashik">Nashik</option>
            <option value="osmana">Osmanabad</option>
            <option value="pune">Pune</option>
            <option value="ratna">Ratnagiri</option>
            <option value="sola">Solapur</option>
            <option value="wardha">Wardha</option>
            <option value="yavat">Yavatmal</option>
            
            

          </select>
          </div>
  <script type = "text/javascript">
    function myFunction1() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("city");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[6];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }


  function myFunction2() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("domain");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }

  
  function myFunction3() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("category");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[4];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  </script>
    </div>
            
</div>




<section id="table1">
    <table id="myTable" class="drop-in-2">
     <thead> <tr>
          <th>S. No.</th>
          <th>Event name</th>
          <th>Institute</th>
          <th>Domain</th>
          <th>Category</th>
          <th>Date</th>
          <th>City</th>
          <th>Enroll</th>
      </tr>
      </thead>
      <?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
    
    
 ?>
 <tbody>
      <tr>
        <td><?php echo $sn; ?></td>
        <td><a class="button" href="#popup" data-target="#popup<?php echo $data['id'] ?>"><?php echo $data['event_name']; ?></a></td>
        <td><?php echo $data['org']; ?></td>
        <td><?php echo $data['domain']; ?></td>
        <td><?php echo $data['category'];?></td>
        <td><?php echo $data['date']; ?></td>
        <td><?php echo $data['venue']; ?></td>
        <td><a class="button" href="<?php echo $data['enrollment']; ?>">Enroll</a> </td>
    </tr>
  </tbody>

    


    <div id="popup" class="overlay" data-target="#popup1<?php echo $data['id'] ?>">
        <div class="popup">
        <h2><?php echo $data['event_name']; ?></h2>
          
          <a class="close" href="#">&times;</a>
          
          <div class="row">
            <div class="column">
            <img src= "images/talk.jpeg">
            </div>
            <div class="column">
             <div class="content">
              <?php  echo $data['description'] ;?>
             </div>
            </div>
        </div>
      </div>
   
    


    <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
 </table>

 <script>
 

</script>



     
   
  
      </section>
     
  
     


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