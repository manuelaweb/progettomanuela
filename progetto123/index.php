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
	   	 	opacity: 0.7;
    	    filter: alpha(opacity=40); 

	   	 }
	   	 nav {
	   	 	background-color: rgba(200,0,0,0.2);
	   	 	margin-bottom: 100px;

	   	 }
	   	 nav > a > img#logo {
	   	 	height: 72px;
	   	 }
} 
	footer{background-color: #eee; padding: 25px;
	   }
       ul, li{list-style-type: none;
       }
       .list{margin-top: 15px;
       }

    .left{
	    width: 50px;
	    height: 100%;
	    background: #2f2f2f;
        white-space: nowrap; 
        transition: width 0.5s ;
        position: fixed;
        z-index: 9999; 
}
	.left ul{
		padding: 0;
		list-style-type: none;
		text-align: left;
	}
	.left li {
		width: auto;
		height: 60px;
		line-height: 50px;  
		padding-left: 18px;
	}
	.left li:hover {
		background: white; 
		opacity: 0.2;
	}

	.left:hover {
        width: 250px; 
    }  

	.left .item-menu {
	    height:50px;
	    overflow:hidden;
	    color:#fff;
	}  
	.left a{
		color: white;
	    text-decoration: none;
	    font-weight: bold;
	} 
	span.menu{
		padding-left: 17px;
	}
	.t_search {
	    color: black;
	    height: 35px;
	    margin-left: 15px;
	    width: 190px
	}

</style>
</head>

<body>


	<?php include 'nav.php'; ?>

	<div class="container">
  		<div class="row">
    		<div class="col-2">
    </div>

    <div class="col-8">
    	<?php include 'carousel.php'; ?>
    </div>
    
    <div class="col-2">
    	
  </div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

</body>
</html>