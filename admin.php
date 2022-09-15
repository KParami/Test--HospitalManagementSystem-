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
             <li><a href="clinic.php"> CLINIC&nbsp;|</a></li>
             <li><a href="viewclinic.php"> VIEW CLINIC DETAILS &nbsp;|</a></li> 
             <li><a href="viewadmin.php"> VIEW ADMIN DETAILS &nbsp;|</a></li> 
             <li><a href="users.php"> USERS </a></li>
                 
</ul>                                                                            
             <ul class="nav navbar-nav navbar-right">
             <li> <a href="#">  <span class="glyphicon glyphicon-log-in"></span> ADMIN &nbsp;| </a></li>
             <li><a href="index.php">   <span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
            </ul>                                                                                                                                                                                                          
            </ul>
         </div>     
     </nav>
<br><br><br><br>

  
<div class="container"><br><br>
    <h2>WELCOME TO ADMIN PROFILE</h2> <br>
       <button class="collapsible"> ADD DOCTORS</button>
           <div class="content"> <p><form  method="POST" action="doc.php" onsubmit="return validate();" >
              <table>
                   <div><h2 >  NORTH HOSPITAL | DOCTORS ADD</h2>
      
                     <form class="form-horizontal" role="form">
                         <div class="form-group"> <br>
                            <label for="firstName" class="col-sm-3 control-label">  ID</label>
                               <div class="col-sm-9"> <input type="text" id="id" name="id"  class="form-control" autofocus> </div>
                          </div> <br>
                         <div class="form-group"> <br>
                            <label for="name" class="col-sm-3 control-label">  Name</label>
                               <div class="col-sm-9"> <input type="text" id="name" name="name" placeholder="Name" class="form-control" autofocus></div>
                         </div> <br>
                         <div class="form-group"> <br> <label for="qualification" class="col-sm-3 control-label">Qualification </label>
                              <div class="col-sm-9"> <input type="text" id="quali"  class="form-control" name= "quali"> </div>
                         </div><br>
                         <div class="form-group"> <br> <label for="email" class="col-sm-3 control-label">Email </label>
                              <div class="col-sm-9"> <input type="text" id="email"  class="form-control" name= "email"> </div>
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

       <button class="collapsible">ADD PATIENT</button>
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

<br>
<button class="collapsible">APPOINTMENT</button>
<div class="content">
  <p>  <form  method="POST" action="formappointment.php" onsubmit="return validate();" >

<table>
<div><h2 >   NORTH HOSPITAL | ONLINE APPOINTMENT FORM</h2>
      
<form class="form-horizontal" role="form">
                <h2></h2>
                <div class="form-group"> <br>
                    <label for="firstName" class="col-sm-3 control-label">  First Name</label>
                    <div class="col-sm-9"> 
                        <input type="text" id="fname" name="fname" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div> <br>
                <div class="form-group"> <br>
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div> <br>
                <div class="form-group"> <br>
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div><br>

                <div class="form-group"> <br>
                    <label  class="col-sm-3 control-label">Appointment Date </label>
                    <div class="col-sm-9">
                        <input type="date" id="appointmentdate"  class="form-control" name= "appointmentdate">
                    </div>
                </div><br>
                <div class="form-group"><br>
                    <label for="phone" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phone" id="phone" placeholder="Phone number" class="form-control" name="phone">
                
                    </div>
                </div><br>
                <div class="form-group"> <br>
                    <label for="doctor" class="col-sm-3 control-label" >Doctor </label>
                    <div class="col-sm-9">
                          <select type="text"  id="doctor" class="form-control-lg"  name="doctor" placeholder="select" >
                             <option> </option>
                             <option>Dr.M MM Fernando</option>
                             <option>Dr. Fernando</option>
                             <option>Dr.G V Soysa</option>
                             <option>Dr.T S Silva</option>
                             <option>Dr.M MM Fernando</option>
                             <option>Dr. Fernando</option>
                             <option>Dr.G V Soysa</option>
                             <option>Dr.T S Silva</option>
                             <option>Dr.M MM Fernando</option>
                             <option>Dr. Fernando</option>
                             <option>Dr.G V Soysa</option>
                             <option>Dr.T S Silva</option>
                             <option>Dr.M MM Fernando</option>
                             <option>Dr. Fernando</option>
                             <option>Dr.G V Soysa</option>
                             <option>Dr.T S Silva</option>
                             <option>Dr.M MM Fernando</option>
                             <option>Dr. Fernando</option>
                             <option>Dr.G V Soysa</option>
                             <option>Dr.T S Silva</option>
                    
                             
                            </select>
                        </div>
                    </div><br>

                <div class="form-group"> <br>
                    <label for="department" class="col-sm-3 control-label" >Department </label>
                    <div class="col-sm-9">
                          <select type="text"  id="deprtment" class="form-control-lg"  name="department" placeholder="select" >
                             <option> </option>
                             <option>CHILDREN DOCTOR</option>
                             <option>PHYSICIAN</option>
                             <option>ENT SPECIALIST</option>
                             <option>NEUROLOGIST</option>
                             <option>SURGERY</option>
                             <option>PHYSICIAN 10</option>
                             <option>PHYSICIAN 15</option>
                             <option>PHYSIOTHERAPY</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="form-group"> <br>
                    <label for="firstName" class="col-sm-3 control-label">  Reason</label>
                    <div class="col-sm-9"> 
                        <input type="text" id="reason" name="reason" placeholder="Reason" class="form-control" autofocus>
                    </div>
                </div> <br>

              
               <br><br>
               
                <button type="submit" value="submit" class="btn btn-default" >SUBMIT</button></ul>
            </form> <!-- /form -->
     </div> 


</table> </p>
</div>
<br>

<button class="collapsible">ADD NEW ADMIN</button>
<div class="content"><p>
    
<span class="close"> <a href="admin.php">&times;</span> </a>
     
     <h2>NORTH &nbsp; HOSPITAL | ADMIN REGISTER  </h2><br>

       <form method="POST" action="registerusers.php" onsubmit="return validate();" >	
         <form class="form-horizontal" role="form">
          
                <div class="form-group"> <br>
                    <label for="name" class="col-sm-3 control-label">  Name</label>
                    <div class="col-sm-9"> 
                        <input type="text" id="name" name="name"  class="form-control" autofocus>
                    </div>
                </div> <br>
                <div class="form-group"> <br>
                    <label for="email" class="col-sm-3 control-label">  Email</label>
                    <div class="col-sm-9"> 
                        <input type="email" id="email" name="email"  class="form-control" autofocus>
                    </div>
                </div> <br>           
                <div class="form-group"> <br>
                    <label for="phone" class="col-sm-3 control-label"> Phone Number</label>
                    <div class="col-sm-9"> 
                        <input type="text" id="phone" name="phone" class="form-control" autofocus>
                    </div>
                </div> <br>

                <div class="form-group"> <br>
                    <label for="password" class="col-sm-3 control-label"> Passsword</label>
                    <div class="col-sm-9"> 
                        <input type="text" id="password" name="password"  class="form-control" autofocus>
                    </div>
                </div> <br>
                <div class="form-group"> <br>
                    <label for="confirm password" class="col-sm-3 control-label"> Confirm Password</label>
                    <div class="col-sm-9"> 
                        <input type="text" id="password" name="password"  class="form-control" autofocus>
                    </div>
                </div> <br><br>
                                                                                                             
                <button type="submit" value="submit" class="btn btn-default" >SUBMIT</button></ul>
   </form></p>
</div>

<br>



</div>
  </p>
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






</div>
</div>

<br><br><br><br><br><br>


<footer>
<?php
echo "<p>Copyright &copy; 2020-" . date("Y") . " North |  Hospital  </p>";
?>
<a href="contact.php">CONTACT US &nbsp; </a>|
  <a href="about.php"> ABOUT US &nbsp; </a>| <a href="#"> PRIVACY POLICY&nbsp; </a>
  |12th place , Colombo , Sri Lanka.

</footer>

</body>
</html>