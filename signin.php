<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="154687622103-kju9rj8anaop77qo9j2lsjtoj4buootu.apps.googleusercontent.com">
    <link rel="stylesheet" href="css/login.css">
    <title>Sign In With Google </title>
</head>


<body>
    <div class = "container">
    <h2 class="alert alert-success">Sign-In With Google</h2>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>

    <div class="data">
        <br><br>
        <div class="bottom-container">
            <div class="row">
                 <a href="index.php" style="color:white" class="btn">Back</a>
             </div>
         </div>
</div>
</div>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
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


</body>

</html>