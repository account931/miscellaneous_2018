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
	  
	  
	 
      <!--<link rel="stylesheet" type="text/css" media="all" href="css/geo_mapbox.css">-->

	  <meta name="viewport" content="width=device-width" />
	  
	  <!--Favicon-->
      <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">-->
   </head>


   <body>
       <div class="wrapper grey">
    	     <div class="container">
		         <div class="row ">
					 
				     <!---------------- Div with Namespace usage -------->	
				     <div class="col-sm-8 col-xs-12"  id="datePicker" >
					     <h2> Namespaces-> 3 variants usage</h2>
					     <?php
						 //require_once "Classes/ExampleClass.php"; //we use autoload instead
                         
						 //Namespace variant_1
						 use Forkk\ExampleClass as Dima;
						 $class = new Dima();//new Forkk\ExampleClass();
						 $class->example_method();  //echo Namespace_1 is OK
						 
						 //Namespace  variant_2
						 $class = new variant_2\ExampleClass();
						 $class->example_method();  //echo Namespace_2 is OK
						 
						 //Namespace  variant_3
                         use variant_3\ExampleClass;
						 $class = new ExampleClass();
						 $class->example_method();  //echo Namespace_3 is OK
						
                         ?>						 
						 
					 </div>
				     <!---------------- Div with Namespace usage -------->
					 
					 
				 
				  </div>  <!-- END class="row row1"> here, to make sure QR img appears on the same line in desktop-->
				 
 
    		</div><!-- /.container -->	  		
         </div><!-- /.wrapper -->
        
      

   </body>
</html>
