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
  
    <style>
    </style>
</head>
<body>
    
<div>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav navbar-left"> <a  class="navbar-brand" > <h1>North Hospital</h1> </a> <br><br><br><br> <br><br>
             <li><a href="doctor.php">&nbsp; HOME &nbsp;|</a></li>
             <li><a href="appointmentdetails.php">ONLINE APPOINTMENT &nbsp;|</a></li>
             <li><a href="patientdetails.php">PATIENT DETAILS &nbsp;|</a></li>                                                                                
             <ul class="nav navbar-nav navbar-right">
             <li><a href="#.php">   <span class="glyphicon glyphicon-log-in"></span> DOCTOR ACCOUNT &nbsp;| </a></li>
             <li><a href="index.php">   <span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
            </ul>                                                                                                                                                                                                          
            </ul>
         </div>     
     </nav>
              
</div>


<br><br><br><br><br>
 
<div class="container">
    <h2>DOCTOR PROFILE</h2> <br>
       <button class="collapsible"> ADD MEDICINE</button>
           <div class="content"> <p><form  method="POST" action="doc.php" onsubmit="return validate();" >
              <table>
                   <div><h2 >  NORTH HOSPITAL | ADD MEDICINE</h2>
      
                     <form class="form-horizontal" role="form">
                         <div class="form-group"> <br>
                            <label for="firstName" class="col-sm-3 control-label">  ID</label>
                               <div class="col-sm-9"> <input type="text" id="id" name="id"  class="form-control" autofocus> </div>
                          </div> <br>
                         <div class="form-group"> <br>
                            <label for="name" class="col-sm-3 control-label">  Name</label>
                               <div class="col-sm-9"> <input type="text" id="name" name="name" placeholder="Name" class="form-control" autofocus></div>
                         </div> <br>
                         <div class="form-group"> <br> <label for="email" class="col-sm-3 control-label">Qualification </label>
                              <div class="col-sm-9"> <input type="text" id="quali"  class="form-control" name= "quali"> </div>
                         </div><br>
                        <div class="form-group"> <br> <label for="bedtype" class="col-sm-3 control-label" >Category </label>
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
                       <div class="form-group"><br> <label for="phone" class="col-sm-3 control-label">Phone number </label>
                             <div class="col-sm-9"> <input type="phone" id="phone" placeholder="Phone number" class="form-control" name="phone"></div>
                       </div><br>
                       <div class="form-group"> <br> <label for="firstName" class="col-sm-3 control-label">Consultancy Fee</label>
                             <div class="col-sm-9"> <input type="text" id="cf" name="cf"  class="form-control" autofocus></div>
                       </div> <br>
                       <div class="form-group"> <br><label  class="col-sm-3 control-label">Experience </label>
                            <div class="col-sm-9"><input type="text" id="exp"  class="form-control" name= "exp"></div>
                       </div><br>
                       <div class="form-group"> <br><label  class="col-sm-3 control-label">Password </label>
                            <div class="col-sm-9"><input type="text" id="pass"  class="form-control" name= "pass"></div>
                       </div><br>
                       <br><br> 
                       <button type="submit" value="submit" class="btn btn-default" >SUBMIT</button></ul>
                     </form> 
                   </div> 
                  </table> </p>
              </div><br>

       <button class="collapsible">TREATMENT RECORD</button>
           <div class="content">  <p><form  method="POST" action="patientcon.php" onsubmit="return validate();" >
                 <table>
                      <div><h2 >  NORTH HOSPITAL | ADD PATIENT</h2>
                          <form class="form-horizontal" role="form">
                              <div class="form-group"> <br><label for="name" class="col-sm-3 control-label">  Name</label>
                                  <div class="col-sm-9"> <input type="text" id="name" name="name" placeholder="Name" class="form-control" autofocus></div>
                              </div> <br>
 
                             <div class="form-group"> <br> <label for="email" class="col-sm-3 control-label">Address </label>
                                  <div class="col-sm-9"> <input type="text" id="address"  class="form-control" name= "address"></div>
                             </div><br>
                              <div class="form-group"> <br>  <label for="firstName" class="col-sm-3 control-label">City</label>
                                   <div class="col-sm-9">  <input type="text" id="city" name="city"  class="form-control" autofocus> </div>
                              </div> <br>

               <div class="form-group"> <br>
                   <label for="firstName" class="col-sm-3 control-label">NIC</label>
                   <div class="col-sm-9"> 
                       <input type="id" id="id" name="id"  class="form-control" autofocus>
                   </div>
               </div> <br>

               <div class="form-group"> <br>
                   <label for="firstName" class="col-sm-3 control-label">DOB</label>
                   <div class="col-sm-9"> 
                       <input type="date" id="dob" name="dob"  class="form-control" autofocus>
                   </div>
               </div> <br>
            
               <div class="form-group"><br>
                   <label for="phone" class="col-sm-3 control-label">MobileNo</label>
                   <div class="col-sm-9">
                       <input type="phone" id="phone" placeholder="Phone number" class="form-control" name="phone">
                   </div>
               </div><br>
          
               <div class="form-group"> <br>
                   <label  class="col-sm-3 control-label">Email</label>
                   <div class="col-sm-9">
                       <input type="email" id="email"  class="form-control" name= "email">
                   </div>
               </div><br><br><br> 
               <button type="submit" value="submit" class="btn btn-default" >SUBMIT</button></ul>
           </form> 
    </div> 

</table> </p>
</div>


</div>

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

</script>                                                                                                                                           <br><br><br><br><br>
</div>




<br><br>
<div class="container">
<label for="firstName" class="col-sm-3 control-label">  Select image to upload:</label>
<div id="content">
<form class="form-horizontal" role="form" method="POST" action="imageupload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  		<button type="submit" name="upload">POST</button>
          <br>
    
  	</div>
  </form>
<br><br><br>

</div>

</div>
</div>

<br><br><br><br><br><br>


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














    



</body>
</html>