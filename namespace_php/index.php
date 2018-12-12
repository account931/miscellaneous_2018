<?php 
//namespace somediffrentnamespace;
include 'Classes/autoload.php';//uses autoload instead of manual includin each class-> Error if it is included in 2 files=only1 is accepted 
?>
<!doctype html>
<!--------------------------------Bootstrap  Main variant ------------------------------------------>
  <html lang="en-US">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html">
      <meta name="description" content="myConcert" />
      <meta name="keywords" content="myConcert">
      <title>Namespace Php</title>
  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Fa-fa library-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  
	  <script src="js/geo_mapbox_core.js"></script><!-- Main --> 
	  <script src="js/js_objects/instruction.js"></script>  <!-- Instructions --> 
	  <script src="js/js_objects/load_example.js"></script> <!-- load_example -->
	  <script src="js/js_objects/clear_fields.js"></script><!-- clear_fields -->
	   <script src="js/js_objects/split_coordinates.js"></script><!-- split_coordinates -->
	 
      <link rel="stylesheet" type="text/css" media="all" href="css/geo_mapbox.css">

	  <meta name="viewport" content="width=device-width" />
	  
	  <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
   </head>


   <body>
       <div class="wrapper grey">
    	     <div class="container">
		         <div class="row ">
					 
				     <!---------------- Div with DatePicker -------->	
				     <div class="col-sm-4 col-xs-12"  id="datePicker" >
					     <?php
						 //require_once "Classes/ExampleClass.php";

						 //use Forkk as feline;
						 $class = new Forkk\ExampleClass();
						 $class->example_method();
						 
						 $class = new mineX\ExampleClass();
						 $class->example_method();

						// \feline\ExampleClass::example_method();
                         ?>						 
						 
					 </div>
				     <!---------------- Div with DatePicker -------->
					 
					 
				 
				  </div>  <!-- END class="row row1"> here, to make sure QR img appears on the same line in desktop-->
				 
 
    		</div><!-- /.container -->	  		
         </div><!-- /.wrapper -->
        
      

   </body>
</html>
