<?php 
    //By team code-ium, for High Tech Hacks Hackathon 2.0
    include "taskbar.php";
    include "session.php";
    include "auth.php";

    if(!defined($_SESSION['userID'])) {
        echo "Your session has expired. Redirecting...";
        header("Location: index.php");
        exit();
    }
?>
<html>
    <head>
        <style>
        #map {
            height: 400px;
            width: 80%        
        }
</style>
    </head>
    <body>
        <div id="map">
        </div>
        <script>
        function initMap() {
            var options = {
                zoom: 15,
                center: { lat: 33.933241, lng: -84.340288 },
            };
            var map = new google.maps.Map(document.getElementById('map'), options);
            var marker = new google.maps.Marker({
                position: { lat: 33.933241, lng: -84.340288 },
                map: map,
            });
        }
        </script>
        <script defer 
            src="<https://maps.googleapis.com/maps/api/js?key=AIzaSyAC8CS_WTsCAOWYchdNa3m5aHmVp8DZvFU&callback=initMap>">
        </script>
        
    </body>
</html>