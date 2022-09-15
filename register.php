<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>North Hospital | Log In </title>
    <link rel="stylesheet" type="text/css"  href="css/styles.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>   
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>


</head>

<span class="close"> <a href="index.php">&times;</span> </a>
<body>
    <div class="container">      
 <button class="collapsible">ADD ADMIN</button>
<div class="content">
  <p>   <h2>NORTH &nbsp; HOSPITAL | ADMIN REGISTER  </h2><br>

<form method="POST" action="registerusers.php" onsubmit="return validate();" >	
             <label>
                    <input name="name" id="name" type="text" required />
                    <div class="label-text">Full Name</div>
            </label>
             <label>
                    <input type="email" name="email" id="email" required />
                    <div class="label-text">Email</div>
            </label>
            <label>
                    <input type="text" name="phone" id="phone" required />
                    <div class="label-text">Phone Number</div>
            </label>
            <label>
                    <input type="password" name="password" id="password" required />
                    <div class="label-text">Password</div>
            </label>                             
            <label>
                    <input type="password" name="password" id="password" required />
                    <div class="label-text">Confirm Password</div>
            </label> <br><br><br>

                                                                                                             
            <button type="submit" value="Submit">  SUBMIT</button>
   </form></p>
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

</script>


</div>






</body>
</html>




