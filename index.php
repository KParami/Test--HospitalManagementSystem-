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
  <script type = "text/javascript" src = "maps.js"></script>
   
    <link rel="stylesheet" href="css/styles.css">
    <style>
     .bcontainer {
           height:450px;
                }

     #map {
            width:100%;
            height:100%;
            border: 1px solid blue;
                }

</style>
</head>
<body>
  
  <div>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav navbar-left"><a  class="navbar-brand" > <h1>North Hospital </h1> </a> <br><br><br><br> <br><br>
             <li><a href="index.php">&nbsp; HOME &nbsp;|</a></li>
             <li><a href="userappointment.php">APPOINTMENT &nbsp;|</a></li>
             <li><a href="findadoctor.php"> FACILITIES &nbsp;|</a></li>
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
         <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>COVID-19</strong>Should Doctors Be Required to Get a COVID Vaccine? -Covid-19 updates

</div>     
     </nav>
     </div>       
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                              </ol>

                  <div class="carousel-inner" role="listbox">
                        <div class="item active"><img src="image/covid/h4.jpg" alt="hospital" width="1000" height="300"></div>

                        <div class="item"> <img src="image/h3.jpg" alt="Staff" width="1000" height="300"></div>
    
                        <div class="item"><img src="image/a.jpg" alt="Hos" width="1000" height="300"></div>

                        <div class="item"> <img src="image/covid/h1.jpg" alt="deo" width="1000" height="300"></div>
    
                 </div>
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
</div>



  <br><br>
  <div class="container">
<h1 class="text-center">WELCOME TO HOSPITAL NORTH</h1><br>
<h2>Our Commitment to Safe Care We're here when you need us. For everyday care or life-changing care, you can count on us to keep you and your loved ones safe and healthy.</h2>

<div class="container">
<div class="row">
  <div class="column" style="background-color:#0C99BA;">
    <h2>APPOINTMENT</h2>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
     Excepteur sint occaecat cupidatat non proident, 
    sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  </div>
  <div class="column" style="background-color:#1184C2;">
    <h2>PATIENT</h2>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  </div>
  <div class="column" style="background-color:#1164B5;">
    <h2>DOCTORS</h2>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  </div><br></div></div>

<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
  
<h2>STAY SAFE</h2>

<div class="row">
  <div class="column" style="background-color:whitesmoke;">
  <h2>LOREM IPSUM</h2>
  <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
  eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
  Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi 
  nesciunt.
   Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
   vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p><br><br><br> </div>
  <div class="column" style="background-color:white;">
  <h2>LOREM IPSUM</h2>
  <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
   totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
   Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
   sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
  vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p></div>
 
  <div class="column" style="background-color:whitesmoke;">
  <h2>LOREM IPSUM</h2>
  <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
  eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
  Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi 
  nesciunt.
   Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
   vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p><br><br><br>
 
  </div>
</div>

<br><br><br><br><br><br><br><br>

<section>
	<div class="row">
                     <div class="col-lg">
                         <div class="well well-sm">
                              <form method="POST" class="form-horizontal" action="feedback.php" onsubmit="return validate();" >	
                                  <fieldset back>
                                       <legend class="text-center">DROP US A MESSAGE</legend>
                                        
                                                    <div class="form-group"><?=$_result; ?>
                                                      <label class="col-md-3 control-label" for="name">Name</label>
                                                      <div class="col-md-9">
                                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                                      </div>
                                                    </div>
                                            
                                                   
                                                    <div class="form-group">
                                                      <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                                      <div class="col-md-9">
                                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                                      </div>
                                                    </div>
                                            
                                                    
                                                    <div class="form-group">
                                                      <label class="col-md-3 control-label" for="message">Your message</label>
                                                      <div class="col-md-9">
                                                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
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
<br>

<div class="bcontainer">
        <div id="map" style="width:100%;height:400px;"></div>

<script>
    
    function initMap() {

      var options = {
     // center:new google.maps.LatLng(6.7056, 80.3847),
        zoom:14,
        center:{lat:6.7056,lng:80.3847}
        };

        //new map
    var map = new 
    google.maps.Map(document.getElementById('map'),options);

    //map marker
    var marker = new google.maps.Marker({
       position: {lat:6.7056,lng:80.3847},
       map:map
    });
}


</script>

<script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0Q3PDJoS4cbx-biRzDuFR5XU2XtF6FYA&callback=initMap"  ></script>


 </div>

</div>
</div>

</section>

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