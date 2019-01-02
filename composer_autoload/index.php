<?php
require 'vendor/autoload.php'; //Composer autoload

//Class that uses PSR-4 namespace. It is set in composer.json in {"psr-4": {}}
$v = new Cubet\Calculator\CalculatorController();   //new variant_2\ExampleClass();

//Calss that does not use PSR-4 namespace. It is set in composer.json in {"classmap":}
$b = new Class_1();
$b->say("Non PSR-4");

//anything below is irrelevant to the topic of Composer autoload
?>

<!doctype html>
<!--------------------------------Bootstrap  Main variant ------------------------------------------>
  <html lang="en-US">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html">
      <meta name="description" content="myConcert" />
      <meta name="keywords" content="myConcert">
      <title>Autoload Composer</title>
  

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Fa-fa library-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  
	 
      <!--<link rel="stylesheet" type="text/css" media="all" href="css/myConcert.css">-->
	  
	  <!--<script src="js/local_storage.js"></script>     <!-- local_storage (instead of cookie)  JS-->-->
     
	  
	
	  
	  <meta name="viewport" content="width=device-width" />
	  
	  <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

     </head>

     <body>  
	 
       <div id="headX" class="jumbotron text-center gradient alert-success my-background head-style" style =' background-color:lavender ;'> <!--#2ba6cb;-->
         <h1 id="h1Text"> <span id="textChange"> Autoload Composer</span> <i class="fa fa-weibo" style="font-size:48px;color:"></i><!--</span> <img src="http://78.media.tumblr.com/tumblr_m2hq5tt3ma1qav3uso1_400.gif" style="width:3%"/>--> </h1> 	   
	   </div>

         <div class="wrapper grey">
    	     <div class="container">
		       
			   <!------------------------- SOME DIVS here ------------------------------------------------>
    
    		</div><!-- /.container -->	  		
         </div><!-- /.wrapper -->
  
    </body>
</html>









  
