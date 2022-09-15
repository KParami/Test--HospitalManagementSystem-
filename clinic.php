<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>North-Hospital</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
    <link rel="stylesheet" href="css/styles.css">
  
</head>
<body>
     
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav navbar-left"> <a  class="navbar-brand" > <h1>North Hospital</h1> </a> <br><br><br><br> <br><br>
             <li><a href="admin.php">&nbsp; HOME &nbsp;|</a></li>
             <li><a href="appointment.php">APPOINTMENT &nbsp;|</a></li>
             <li><a href="viewdoctor.php"> DOCTORS &nbsp;|</a></li>
             <li><a href="viewpatient.php">PATIENT &nbsp;|</a></li>
             <li><a href="clinic.php"> CLINIC &nbsp;|</a></li>
             <li><a href="viewclinic.php"> VIEW CLINIC DETAILS &nbsp;|</a></li>   
             <li><a href="viewadmin.php"> VIEW ADMIN DETAILS &nbsp;|</a></li> 
             <li><a href="users.php"> USERS </a></li>  
            
             
</ul>                                                                            
             <ul class="nav navbar-nav navbar-right">
             <li> <a href="#.php">  <span class="glyphicon glyphicon-log-in"></span> ADMIN &nbsp;| </a></li>
             <li><a href="index.php">   <span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
            </ul>                                                                                                                                                                                                          
            </ul>
         </div>     
     </nav>
<br><br><br><br><br><br> 

  
<div class="container">
    <p class="text-center"> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, 
    sunt in culpa qui officia deserunt mollit anim id est laborum."</p> <br>


       <button class="collapsible"> ADD CLINIC</button>
           <div class="content"> <p><form  method="POST" action="clinicaction.php" onsubmit="return validate();" >
              <table>
                   <div><h2 >  NORTH HOSPITAL | CLINIC DETAILS ADD</h2>
      
                     <form class="form-horizontal" role="form">
                         <div class="form-group"> <br>
                            <label for="id" class="col-sm-3 control-label">  ID</label>
                               <div class="col-sm-9"> <input type="text" id="id" name="id"  class="form-control" autofocus> </div>
                          </div> <br>
                         <div class="form-group"> <br>
                            <label for="name" class="col-sm-3 control-label"> Clinic Name</label>
                               <div class="col-sm-9"> <input type="text" id="name" name="name" placeholder="Clinic Name" class="form-control" autofocus></div>
                         </div> <br>
                         <div class="form-group"> <br> <label for="name" class="col-sm-3 control-label">Doctors Name </label>
                              <div class="col-sm-9"> <input type="text" id="dname"  class="form-control" name= "dname"> </div>
                         </div><br>
                        <div class="form-group"> <br> <label for="category" class="col-sm-3 control-label" >Category </label>
                              <div class="col-sm-9"> <select type="text"  id="category" class="form-control-lg"  name="category"  >
                            <option> </option>
                            <option>CHILDREN DOCTOR</option>
                            <option>PHYSICIAN</option>
                            <option>ENT SPECIALIST</option>
                            <option>NEUROLOGIST</option>
                            <option>SURGERY</option>
                            <option>ALLERGISTS/IMMUNOLOGISTS</option>
                            <option>PHYSICIAN 15</option>
                            <option>PHYSIOTHERAPY</option>
                            <option>PODIATRIST</option>
                            <option>CARDIOLOGY</option>
                            <option>GENERAK PRACTITIONER</option>
                            <option>PEDIATRICIAN</option>
                            <option>ENDOCRINOLOGIST</option>
                            <option>RHEUMATOLOGIST</option>
                            <option>PSYCHIATRIST</option>
                            <option>NEPHROLOGIST</option>
                            <option>PHYSICIAN 15</option>
                            <option>PHYSIOTHERAPY</option>
                            <option>PODIATRIST</option>
                            <option>CHILDREN DOCTOR</option>
                            <option>PHYSICIAN</option>
                            <option>ENT SPECIALIST</option>
                            <option>NEUROLOGIST</option>
                            <option>SURGERY</option>
                            <option>Allergists/Immunologists</option>
                            <option>PHYSICIAN 15</option>
                            <option>PHYSIOTHERAPY</option>
                            <option>PODIATRIST</option>
                            </select></div>
                       </div><br>
                      
                       <div class="form-group"> <br> <label for="clinicday" class="col-sm-3 control-label">Clinic Day</label>
                             <div class="col-sm-9"> <select type="day" id="cd" name="cd"  class="form-control" autofocus>
                             <option> </option>
                            <option>SUNDAY</option>
                            <option>MONDAY</option>
                            <option>TUESDAY</option>
                            <option>WEDNESDAY</option>
                            <option>THURSDAY</option>
                            <option>FRIDAY</option>
                            <option>SATURAY</option> </select></div>
                       </div> <br>
                       <div class="form-group"> <br><label  class="col-sm-3 control-label">Clinic Time (open) </label>
                            <div class="col-sm-9"><input type="time" id="ct"  class="form-control" name= "ct"></div>
                       </div><br>
                       <div class="form-group"> <br><label  class="col-sm-3 control-label">Clinic Time (close) </label>
                            <div class="col-sm-9"><input type="time" id="cct"  class="form-control" name= "cct"></div>
                       </div><br>
                       <br><br> 
                       <button type="submit" value="submit" class="btn btn-default" >SUBMIT</button></ul>
                     </form> 
                   </div> 
                  </table> </p>
              </div><br>

      


<br>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

</script>
</div>
</div>


</div>

<br><br><br><br><br>
<footer>
<?php
echo "<p>Copyright &copy; 2020-" . date("Y") . " North |  Hospital  </p>";
?>
<a href="#">CONTACT US &nbsp; </a>|
  <a href="#"> ABOUT US &nbsp; </a>| <a href="#"> PRIVACY POLICY&nbsp; </a>
  |12th place , Colombo , Sri Lanka.

</footer>

</body>
</html>