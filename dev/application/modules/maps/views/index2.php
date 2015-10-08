<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<div id="map" style="width: 900px; height: 500px;"></div>
<script type="text/javascript">
    
    var direcciones = [];

    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 18
    });
    var infoWindow = new google.maps.InfoWindow({map: map});

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            //infoWindow.setPosition(pos);
            //infoWindow.setContent('Location found.');
            map.setCenter(pos);
        }, function () {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }

     map.addListener('click', function(e) {
        placeMarker(e.latLng);
        //console.log(e.latLng.M);
    });

    function placeMarker(location) {
        //alert(location);
        var d = [location.J,location.M];    
        direcciones.push(d);
        
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
        
        console.log(direcciones);
    }


    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
    }




    /*for (i = 0; i < locations.length; i++) {  
     marker = new google.maps.Marker({
     position: new google.maps.LatLng(locations[i][1], locations[i][2]),
     map: map
     });
     
     google.maps.event.addListener(marker, 'click', (function(marker, i) {
     return function() {
     infowindow.setContent(locations[i][0]);
     infowindow.open(map, marker);
     }
     })(marker, i));
     }*/
    $( document ).ready(function() {
        $('.ver').click(function(){
            console.log(direcciones);
        });
    });
    
</script>

<br>

<div class="ver">Ver</div>