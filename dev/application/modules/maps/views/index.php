<html>
<head>	
         <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		function updateDatabase(newLat, newLng)
		{
			// make an ajax request to a PHP file
			// on our site that will update the database
			// pass in our lat/lng as parameters
			/*$.post(
				"/my_controller/update_coords", 
				{ 'newLat': newLat, 'newLng': newLng, 'var1': 'value1' }
			)
			.done(function(data) {
				alert("Database updated");
			});*/
        
                            alert(newLat+" - "+newLng);
		}
	</script>
        
        
	<script type="text/javascript">
		var centreGot = false;
	</script>
	<?php echo $map['js']; ?></head>
<body><?php echo $map['html']; ?>


</body>
</html>



<!-- http://biostall.com/demos/google-maps-v3-api-codeigniter-library/ -->