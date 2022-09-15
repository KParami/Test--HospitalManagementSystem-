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
<div>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav navbar-left"><a  class="navbar-brand" > <h1>North Hospital </h1> </a> <br><br><br><br> <br><br>
             <li><a href="index.php">&nbsp; HOME &nbsp;|</a></li>
             <li><a href="userappointment.php">APPOINTMENT &nbsp;|</a></li>
             <li><a href="facilities.php"> FACILITIES &nbsp;|</a></li>
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
</div><br><br><br><br><br><br><br>
<body>
            <div class="container">
            <h3 class="text-center">WELCOME TO HOSPITAL NORTH</h3><br>
               

</div>
<div>
<script>
$API_key    = ‘AIzaSyAGdwFBj01pi2ZTJWQcc7x7HlFsMkBMhkk’;
$channelID  = ‘https://www.youtube.com/user/MEDICATradeFair/videos’;
$maxResults = 06;


$videoList = json_decode(file_get_contents
(‘https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=’.$channelID.’&maxResults=’.$maxResults.’&key=’.$API_key.”));

</script>

</div>

<script>

foreach($videoList->items as $item){

if(isset($item->id->videoId)){

echo ‘<div class=”youtube-video”>

        <iframe width=”280″ height=”150″ src=”https://www.youtube.com/embed/’.$item->id->videoId.'” frameborder=”0″ allowfullscreen></iframe>

        <h2>’. $item->snippet->title .'</h2>

    </div>’;

}

}
</script>



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