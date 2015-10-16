<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>


<div id="map" style="width: 900px; height: 500px;"></div>

<script type="text/javascript">

    var direcciones = [];
    var temp = [];
    var nameDIreccion = "";
    var latInfo = 0;
    var lngInfo = 0;
    var markers = [];


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
        handleLocationError(false, infoWindow, map.getCenter());
    }

    google.maps.event.addListener(map, "click", function (event) {
        var latitude = event.latLng.lat();
        var longitude = event.latLng.lng();
        //console.log( latitude + ', ' + longitude );
        placeMarker(event);

    }); //end addListener

    var idg = 0;
    function placeMarker(location) {
        //alert(location);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(location.latLng.lat(), location.latLng.lng()),
            draggable: true,
            map: map
        });
        markers.push(marker);

        var geocoder = new google.maps.Geocoder();

        var yourLocation = new google.maps.LatLng(location.latLng.lat(), location.latLng.lng());
        geocoder.geocode({'latLng': yourLocation}, processGeocoder);
        idg = idg + 1;
        temp = [{'id': idg, 'lat': location.latLng.lat(), 'lng': location.latLng.lng(), 'name': '', 'city': '', 'country': ''}];

        google.maps.event.addListener(marker, 'dragend', function (event) {
            console.log(direcciones);
            console.log(direcciones[direcciones.length - 1]);
        });
    }

    function processGeocoder(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
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

    function error(msg) {
        alert(msg);
    }

    // Sets the map on all markers in the array.
    function setMapOnAll(map) {
        console.log(markers.length);
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

    // Removes the markers from the map, but keeps them in the array.
    function clearMarkers() {
        setMapOnAll(null);
    }

    // Shows any markers currently in the array.
    function showMarkers() {
        setMapOnAll(map);
    }

    // Deletes all markers in the array by removing references to them.
    function deleteMarkers() {
        clearMarkers();
        markers = [];
        direcciones = [];
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
    }



    $(document).ready(function () {
        $('.ver').click(function () {

             $.ajax({
                type: "POST",
                url: base_url + "maps/saveRoute",
                data: {'data':JSON.stringify(direcciones)},
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
<br>
<input onclick="clearMarkers();" type=button value="Hide Markers">
<input onclick="showMarkers();" type=button value="Show All Markers">
<input onclick="deleteMarkers();" type=button value="Delete Markers">

