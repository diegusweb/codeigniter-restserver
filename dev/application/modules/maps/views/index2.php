<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>


<div id="map" style="width: 900px; height: 500px;"></div>

<script type="text/javascript">

    var direcciones = [];
    var temp = [];
    var nameDIreccion = "";
    var latInfo = 0;
    var lngInfo = 0;

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

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
        }, function () {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }

    google.maps.event.addListener(map, "click", function (event)
    {
        // place a marker
        placeMarker(event.latLng);

        // display the lat/lng in your form's lat/lng fields
        //document.getElementById("latFld").value = event.latLng.lat();
        //document.getElementById("lngFld").value = event.latLng.lng();
    });



    function placeMarker(location) {
        //alert(location);

        var marker = new google.maps.Marker({
            position: location,
            map: map
        });



        var geocoder = new google.maps.Geocoder();

        var yourLocation = new google.maps.LatLng(location.J, location.M);
        geocoder.geocode({'latLng': yourLocation}, processGeocoder);

        temp = [{'lat': location.J, 'lng': location.M, 'name': '', 'city': '', 'country': ''}];

        //direcciones.push(d);

        //console.log(direcciones+" - "+nameDIreccion);
    }

    function processGeocoder(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            if (results[0]) {
                var na = results[0].formatted_address;
                var dd = na.split(",");
                temp[0].name = dd[0];
                temp[0].city = dd[1].replace(/(^\s*)|(\s*$)/g, "");
                temp[0].country = dd[2].replace(/(^\s*)|(\s*$)/g, "");

                direcciones.push(temp);
                console.log(direcciones);
            } else {
                error('Google no retorno resultado alguno.');
            }
        } else {
            error("Geocoding fallo debido a : " + status);
        }
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
    $(document).ready(function () {
        $('.ver').click(function () {
            console.log(direcciones);
            $.ajax({
                type: "POST",
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                url: base_url+"maps/saveRoute",
                data: JSON.stringify(direcciones),
                success: function (response)
                {
                    console.log(response);
                }
            });

        });


    });

</script>

<br>

Ruta<br>
<button class="ver">guardar rutas</button>