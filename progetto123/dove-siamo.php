<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css">
		img {
	   	 height: 500px;
       }
       body {
        background-image: url('images/cabras.jpg');
        background-repeat: no-repeat;
        background-size: cover; 
       }
       nav {
        background-color: rgba(200,0,0,0.2);
        margin-bottom: 100px;
       }
	   	 
	   	 #map {
	   	 	height: 500px;
	   	 }
	   	 </style>

</head>
<body>

	<?php include 'nav.php'; ?>

	<div class="container">
  <div class="row">
    <div class="col-1">
      
    </div>
    <div class="col-10">
      <div id="map"></div>
    <script>

      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: {lat: 39.925670, lng: 8.529975}
        });

        var image = 'http://www.battlecomics.co.kr/assets/view_navi_icon_home-40ad1807cf08cce2a78dc24c3a7779ebf2607e758a7b06f61f8575732148be55.svg';
        var infowindow = new google.maps.InfoWindow({
          content: '<h2>Siamo qui!</h2><p>In via Carlo Alberto, 60</p>',
          maxWidth: 200
        });
        var marker = new google.maps.Marker({
          position: {lat: 39.925670, lng: 8.529975},
          map: map,
          icon: image
        });
          infowindow.open(map, marker);
          marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBnCMGOQvSAnDwPA4MFuBtmRjJW0_DRuM
&callback=initMap">
    </script>
    </div>
    <div class="col-1">
      
    </div>
  </div>
</div>

	
	
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

</body>
</html>