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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
    <link rel="stylesheet" href="css/styles.css">
  
</head>
<body>
  
  <div>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav navbar-left"><a  class="navbar-brand" > <h1>North Hospital </h1> </a> <br><br><br><br> <br><br>
             <li><a href="index.php">&nbsp; HOME &nbsp;|</a></li>
             <li><a href="userappointment.php">APPOINTMENT &nbsp;|</a></li>
             <li><a href="findadoctor.php"> FIND A DOCTOR &nbsp;|</a></li>
             <li><a href="about.php">ABOUT US &nbsp;|</a></li>
             <li><a href="contact.php">CONTACT US &nbsp;|</a></li>
             <li><a href="news.php">  NEWS </a></li>
             <form class="navbar-form navbar-left" action="actionpage.php">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search" name="search">
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-default" type="submit">
                                                                     <i class="glyphicon glyphicon-search"></i>
                                                                 </button>
                                                             </div>
                                                         </div>
                                                    </form>                                                    
             <ul class="nav navbar-nav navbar-right"><li><a href="log.php"><span class="glyphicon glyphicon-log-in"></span>LOGIN </a> </li></ul>                                                                                                                                                                                                          
            
         </div>
</nav>
               
</div> <br><br><br><br><br><br>

<span class="close"> <a href="index.php">&times;</span> </a>


 <form  method="POST" action="reg.php" onsubmit="return validate();" >
 
 
 <div class="container">
<div><h2 class="text-center">NORTH HOSPITAL | REGISTRATION</h2>
       
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
                    <label  class="col-sm-3 control-label">Birth Date </label>
                    <div class="col-sm-9">
                        <input type="date" id="bday"  class="form-control" name= "bday">
                    </div>
                </div><br>
                
                <div class="form-group"> <br>
                    <label class="col-sm-3 control-label">Address </label>
                    <div class="col-sm-9">
                        <input type="text" id="address"  class="form-control" name= "address" >
                    </div>
                </div><br>
                <div class="form-group"> <br>
                    <label class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                        <input type="city" id="city"  class="form-control" name= "city">
                    </div>
                </div><br>

                <div class="form-group"><br>
                    <label for="phone" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="number" id="phone" placeholder="Phone number" class="form-control" name="phone">
                
                    </div>
                </div><br>
                <div class="form-group"> <br>
                    <label for="nationality" class="col-sm-3 control-label">Nationality</label>
                    <div class="col-sm-9"> 
                        <input type="text" id="nationality" name="nationality" placeholder="Nationality" class="form-control">
                    </div> <br>

                <div class="form-group"><br> <br>
                    <label for="country" class="col-sm-3 control-label">Country </label>
                    <div class="col-sm-9">
                        <input type="text" id="country" placeholder="Country" class="form-control" name="country">
                    </div>
                </div><br>
               
                <div class="form-group"><br>
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="gender" name="gender" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="gender" name="gender" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>  <br>
               

              
               <br><br>
                <button type="submit" value="submit" class="btn btn-default btn-block">REGISTER NOW</button>
            </form> <!-- /form -->
     </div> 

               
</div>       
              


</div>
           
<br><br><br><br>

</body>
</html>







<br><br><br><br><br><br><br><br>


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