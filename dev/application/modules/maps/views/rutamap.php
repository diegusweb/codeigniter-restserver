
<div id="mapa" style="width: 900px; height: 500px;"></div>

<script type="text/javascript">
	

    function initMap() {
	
	
	var demo = [];
    var ids = <?php echo $id_transport;?>;

	    var arrayJS=<?php echo json_encode($rutas);?>;

    // Mostramos los valores del array
	  var flightPlanCoordinatess = [
		{lat: 37.772, lng: -122.214},
		{lat: 21.291, lng: -157.821},
		{lat: -18.142, lng: 178.431},
		{lat: -27.467, lng: 153.027}
	  ];
	  
	  
    // Mostramos los valores del array
	  var flightPlanCoordinates = [];
	  var flightPlanCoordinatesVuelta = [];
	  
	  
    for(var i=0;i<arrayJS.length;i++)
    {
		if(arrayJS[i].sense_street == 1)
			flightPlanCoordinates.push({'lat': parseFloat(arrayJS[i].lat), 'lng': parseFloat(arrayJS[i].lng)});
		else
			flightPlanCoordinatesVuelta.push({'lat': parseFloat(arrayJS[i].lat), 'lng': parseFloat(arrayJS[i].lng)});
    }

	console.log(flightPlanCoordinates[0].lat);
	
	
	  var map = new google.maps.Map(document.getElementById('mapa'), {
		center: {lat: parseFloat(flightPlanCoordinates[0].lat), lng: parseFloat(flightPlanCoordinates[0].lng)},
		zoom: 17
	  });

 
	  var flightPath = new google.maps.Polyline({
		path: flightPlanCoordinates,
		geodesic: true,
		strokeColor: '#FF0000',
		strokeOpacity: 1.0,
		strokeWeight: 2
	  });
	  
	   var flightPaths = new google.maps.Polyline({
		path: flightPlanCoordinatesVuelta,
		geodesic: true,
		strokeColor: '#9090F3',
		strokeOpacity: 1.0,
		strokeWeight: 2
	  });

	  flightPath.setMap(map);
	  flightPaths.setMap(map);
	}


    

    function error(msg) {
        alert(msg);
    }

</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script> 

