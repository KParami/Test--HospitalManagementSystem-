

<!DOCTYPE html>
<html lang="en">

<head>
  <title>North-Hospital</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>

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

  <br><br><br><br><br><br><br>
  <div class="container">
  <p class="text-center">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p><br>
    <h1 class="text-center"> NORTH | HOSPITAL</h1>
    <div class="row">
      <div class="col-lg">
        <div class="well well-sm">
          <form method="POST" class="form-horizontal" action="feedback.php" onsubmit="return validate();">
            <fieldset back>
              <legend class="text-center">DROP US A MESSAGE</legend>

              <div class="form-group">
                <label class="col-md-3 control-label" for="name">Name</label>
                <div class="col-md-9">
                  <input id="name" name="name" type="text" placeholder="Your name" class="form-control" required>
                </div>
              </div>


              <div class="form-group">
                <label class="col-md-3 control-label" for="email">Your E-mail</label>
                <div class="col-md-9">
                  <input type="email" id="email" name="email" placeholder="Your email" class="form-control" required>
                </div>
              </div>


              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Your message</label>
                <div class="col-md-9">
                  <textarea class="form-control" id="message" name="message"
                    placeholder="Please enter your message here..." rows="5" required></textarea>
                </div>
              </div>


              <div class="form-group">
                <div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>

                </div>
              </div>

            </fieldset>
          </form>
        </div>
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