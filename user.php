<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-signin-client_id" content="354515436147-rpi145slla8tdn8rbjjbgmk048bicp6q.apps.googleusercontent.com">
    
    <link rel="stylesheet" href="css/login.css">
    <title>Sign In With Google </title>
</head>

   
    <link rel="stylesheet" href="css/login.css">
   
<style>

* {
  box-sizing: border-box;
}


/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}


.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  
  color: black;
  cursor: pointer;
}



/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: transperant;
  border-radius: 0px 0px 4px 4px;
  border: 1px solid whitesmoke;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 90%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>



</head>
<body>

<script src="https://apis.google.com/js/platform.js" async defer></script>
<div class="container">
  <form action="cappointment.php">
    <div class="row">
      <h2 style="text-align:center">Login with Social Media or Manually</h2><br><br><br>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
    
      <div class="g-signin2" data-onsuccess="onSignIn"> </div>
      <script>
        function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    $("#name").text(profile.getName());
    $("#email").text(profile.getEmail());
    $("#image").attr('src', profile.getImageUrl());
    $(".data").css("display", "block");
    $(".g-signin2").css("display", "none");
        }
 
</script>


        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
        <form  method="POST" action="userlog.php" onsubmit="return validate()";> 	
                                                  <label>
                                                         <input type="email" name="email" id="email" required />
                                                         <div class="label-text">Email</div>
                                                  </label>
                                                  <label>
                                                         <input type="password" name="password" id="password" required />
                                                         <div class="label-text">Password</div>
                                                  </label>     <br><br><br>
                                                                                                                                                                                                              &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                         <button type="submit" name="login" value="Submit">LOG IN</button>

      </div>
      
    </div>
  </form>
</div><br><br><br>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="cappointment.php" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="index.php" style="color:white" class="btn">Back</a>
    </div>
  </div>
</div>


  







</body>
</html>