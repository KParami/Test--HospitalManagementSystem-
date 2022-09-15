<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
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
    <div class="bcontainer">
        <h1>Google maps javascript API</h1>

<script>
    function myMap() {

        var ratnapura = { lat:6.7056, lng: 80.3847};
        var  map = new google.maps.Map(document.getElementById("Map"),{
        zoom:10,
        center: ratnapura

        });

        var marker = new google.maps.Marker({
        position: ratnapura,
        map:map

        });

    }  

</script>

<div id="map" style="width:100%;height:400px;"></div>
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB03GGy018LLpxy5R6u58UbfCketUwCahc&callback=myMap"></script>


  </div>

</body>
</html>