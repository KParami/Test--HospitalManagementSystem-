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
               
</div>



<div class="container"><br><br><br>
    <h1 class="text-center"> ABOUT THIS WEB SITE</h1>
    <p class="text-center">This website is provided by North Hospital to benefit patients, the general public and healthcare professionals.</p><br><br>
<h1 class="text-center">Search Medical Questions and Answers by Category</h1><br><br>

<p class="text-center"> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
</p>


    <div class="row">
                <div class="column" style="background-color:#0C99BA;">
                     <h3> Treatments & Procedures</h3> 
                     <p>Information on surgical options, medications, therapy, and what patients experience during and after treatment.</p><br>
                 </div>

                <div class="column" style="background-color:#1184C2;">
                    <h3>Diseases & Conditions </h3><br>
                    <p>Get answers and details around popular health questions on symptoms, causes and treatment options plus related articles, 
                    videos and more.</p>  
                </div>

                <div class="column" style="background-color:#1164B5;">
                    <h3>Symptoms</h3>
                     <p>Browse an A to Z list of common symptoms and find answers to popular medical questions.</p><br><br>
                    

                 </div>
                 <div class="column" style="background-color:#0C99BA;">

                    <h3>Drugs, Devices & Supplements</h3>
                    <p>Understand how these are used, benefits and side effects.</p><br>

                 </div>
                 <div class="column" style="background-color:#1164B5;">
        
                    <h3>Diagnostics & Testing</h3>
                    <p>Get answers to health questions about what happens before, during and after your next test or assessment.</p>

                 </div>
                 <div class="column" style="background-color:#1164B5;">
                    <h3>Symptoms</h3>
                     <p>Browse an A to Z list of common symptoms and find answers to popular medical questions.</p><br><br>

    </div>
</div>
  </div>     










<br><br><br><br>



  <br><br><br><br><br><br><br><br><br><br> 
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