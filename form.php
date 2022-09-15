<!--?php include('server.php') ?-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>North Hospital | Appointment Form</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>   
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>


</head>
<span class="close"> <a href="index.php">&times;</span> </a>

<body>

 <form  method="POST" action="formappointment.php" onsubmit="return validate();" >
 
 
 <div class="container">
<div><h2 >  NORTH HOSPITAL | ONLINE APPOINTMENT FORM</h2>
       
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
                    <label for="reason" class="col-sm-3 control-label">  Reason</label>
                    <div class="col-sm-9"> 
                        <input type="text" id="reason" name="reason" placeholder="Reason" class="form-control" autofocus>
                    </div>
                </div> <br>

              
               <br><br>
               
                <button type="submit" value="submit" class="btn btn-default" >SUBMIT</button></ul>
            </form> <!-- /form -->
     </div> 

               
</div>       
              


</div>
           
<br><br><br><br>

</body>
</html>




