<?php
/* Template Name:HOME */
get_header();


?>
<style type="text/css">

	body
	{
		background-image: url("http://localhost/Mat/wp-content/uploads/2021/05/fv.jpg");

		background-position: center;
		background-repeat: no-repeat;
		background-size: 100% 100%;
		height: 1000px;
	}


	div.background
	{
		background:url("http://localhost/Mat/wp-content/uploads/2021/05/Capture.png");
		border:2px groove black;
		opacity: 0.6;
		height:100px;
		border-radius: 5px;


	}
	div.transbox
	{
		background:url("http://localhost/Mat/wp-content/uploads/2021/05/Capture.png");
		margin:30px;
		background-color: #ffffff;
		border: 1px groove black;
		border-radius: 5px;
		height: 140px;
		position: relative;
		top:30px;

		

	}
	div.transbox a
	{
   	color: rgb(255, 99, 71);

	}
	div.Box
	{
		
		text-align: center;
		background-color: white;
		border-radius: 10px;
		white-space: initial;
		content: "\A";
		padding-left: 50px;
		padding-right: 50px;
		padding-top: 75px;
		padding-bottom: 75px;	
		align-items: center;
		justify-content: center;

	}




</style>
<div class="background">
	
	<div class="transbox">

		
	</div>
</div>
<div class="ProEye">
		<a style="font-size:6vw; font-weight: bold;text-decoration: none;bottom:50px;position:relative;left: 100px;color: rgb(255, 99, 71);">ProEye</a>

		
	</div>




<div class="container">
	

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="http://localhost/Mat/wp-content/uploads/2021/05/1234.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="http://localhost/Mat/wp-content/uploads/2021/05/123.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="http://localhost/Mat/wp-content/uploads/2021/05/12.jpg" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<div>
		
	</div>
</div>


<?php 
get_footer();
?>