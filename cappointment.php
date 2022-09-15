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
               
</div>

        <br><br><br><br><br><br><br>
<body>
            <div class="container">
            <h3 class="text-center">WELCOME TO HOSPITAL NORTH</h3><br>
                <h3 class="text-center">APPOINTMENT & ACCESS</h3>
                <h4 class="text-center">At Northran Hospital, we're here when you need us most. That's why we're bringing you more ways to
                    get the care you need than ever before.</h4><br>
                <h4 class="text-center">We know the COVID-19 pandemic weighs heavy on your minds right now. You may wonder if it’s safe to
                    come in to get care? Yes, Northran Hospital is among the safest places in healthcare today.
                    You should feel confident we're keeping your family — and our caregivers — safe.
                    No matter what brings you in, know that we take steps every single day to keep you safe during your
                    appointment, procedure or surgery.
                    Learn about some of the steps we have taken to increase safety at our family health centers,
                    emergency rooms and hospitals — and a few changes we’ve put in place to keep Northran Hospital a
                    safe place for our patients, visitors and caregivers, including: <br>
                    <p><br> <strong>" Limiting visitors.  Encouraging physical distancing. Disinfecting common areas frequently.Requiring masks." </strong></p>
                </h4><br>
               
               

<span class="close"> <a href="index.php">&times;</span> </a>

<form method="POST" action="formappointment.php" onsubmit="return validate();">


    <div class="container">
    <h4><strong>You are a Valid User!!!</strong></h4> 
        <h2 class="text-center"> NORTH HOSPITAL | ONLINE APPOINTMENT FORM</h2>

        <form class="form-horizontal" role="form">
            <h2></h2>
            <div class="form-group"> <br>
                <label for="firstName" class="col-sm-3 control-label"> First Name</label>
                <div class="col-sm-9">
                    <input type="text" id="fname" name="fname" placeholder="First Name"
                        class="form-control" autofocus required>
                </div>
            </div> <br>
            <div class="form-group"> <br>
                <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" id="lname" name="lname" placeholder="Last Name"
                        class="form-control" autofocus required>
                </div>
            </div> <br>
            <div class="form-group"> <br>
                <label for="email" class="col-sm-3 control-label">Email </label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control"
                        name="email" required>
                </div>
            </div><br>

            <div class="form-group"> <br>
                <label class="col-sm-3 control-label">Appointment Date </label>
                <div class="col-sm-9">
                    <input type="date" id="appointmentdate" class="form-control" name="appointmentdate" required>
                </div>
            </div><br>
            <div class="form-group"><br>
                <label for="phone" class="col-sm-3 control-label">Phone number </label>
                <div class="col-sm-9">
                    <input type="text" id="phone" placeholder="0770000000" class="form-control"
                        name="phone" required pattern="[0][0-9]{9}">

                </div>
            </div><br>
            <div class="form-group"> <br>
                <label for="bedtype" class="col-sm-3 control-label">Doctor </label>
                <div class="col-sm-9">
                    <select type="text" id="doctor" class="form-control-lg" name="doctor"
                        placeholder="select" required>
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
                <label for="bedtype" class="col-sm-3 control-label">Department </label>
                <div class="col-sm-9">
                    <select type="text" id="deprtment" class="form-control-lg" name="department"
                        placeholder="select" required>
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
                <label for="firstName" class="col-sm-3 control-label"> Reason</label>
                <div class="col-sm-9">
                    <input type="text" id="reason" name="reason" placeholder="Reason"
                        class="form-control" autofocus>
                </div>
            </div> <br><br><br>
            <button type="submit" value="submit">SUBMIT</button></ul>
        </form> <!-- /form -->
    </div>


</div>



</div>
</div>
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