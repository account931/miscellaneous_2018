$(document).ready(function(){
	
	

	
	
	//  on button click runs runFunction_Promise() + .then()
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     **
	
	$(document).on("click", '#promise', function() {   // this  click  is  used  to   react  to  newly generated cicles;
	    showPreloader();
		
	    runFunction_Promise()    //function that returns promise
		    .then(
			 responseZZ => {
                 //console.log(responseZZ);
                 //return user;
				 promiseOK(responseZZ);  //run in .then
             },
	
			//error handler
            error => {
               // вторая функция - запустится при вызове reject
               alert("Rejected: " + error); // error - аргумент reject
            }
		   
            ); 
	   
	}); 

	
	
	
	
	//function that returns promise
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     ** 
	function runFunction_Promise()
	{
		 return new Promise(function(resolveX, reject) {
			 
			 //
			 // send  data  to  PHP handler  ************ 
             $.ajax({
                 url: 'https://data.police.uk/api/outcomes-at-location?&poly=52.268,0.543:52.794,0.238:52.130,0.478',
                 type: 'GET',
			     dataType: 'JSON', // without this it returned string(that can be alerted), now it returns object
			     //passing the city
                 data: { 
			         //serverCity:window.cityX
			     },
				 
                 success: function(dataZ) { //alert(data);
				      resolveX(dataZ);
                 },  //end success
			     error: function (error) {
				
                 }
                 		 
             });
                                              
        //  END AJAXed  part 
			 //
		 });
	}
	
	
	
	//called in .then()
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     ** 
	function promiseOK(z){
		hidePreloader(); //hide preloader
		//alert("Done");
		//alert(z.length);
		var textX = z.length + " reports <br>";
		for(i =0; i < z.length; i++){
		    textX+= "<br><br><p>" + z[i].date + "</p>" +  
			                "<p>" + z[i].category.name + "</p>" + 
							"<p>" + z[i].crime.category + "</p>" + 
							"<p>" + z[i].crime.location.name + "</p>" + 
			                "<hr>";	
		}
		
		
		$("#result").stop().fadeOut("slow",function(){ $(this).html(textX) }).fadeIn(2000);
	}
	
	
	
	
	//Show loader
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     ** 
	function showPreloader()
	{
		 $("#overlay").fadeIn(2000);
		 $(".wrapper").fadeOut(100); 
		 
	}
	
	
	
	
	
	
	
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     ** 
	function hidePreloader()
	{
		$("#overlay").fadeOut(5000);
		$(".wrapper").fadeIn(3000); 
	}
	
	
	
	
	
	
});
// end ready	
	