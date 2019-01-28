$(document).ready(function(){
	
	//check if Promise is supported in browser
	if (Promise){
		//alert("OK");
	} else {
		alert("Promise is not supported in your browser");
	}

	
	
	//  on button click runs runFunction_Promise() + .then()
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     **
	
	$(document).on("click", '#promise', function() {   // this  click  is  used  to   react  to  newly generated cicles;
	    showPreloader();
		
	    runFunction_Promise()    //function that returns promise
		    .then(
			
			     //if runFunction_Promise() was successful
			     responseZZ => {    //this name {responseZZ} must be the same as in {promiseOK(responseZZ)}
                     //console.log(responseZZ);
                     //return user;
				     promiseOK(responseZZ);  //run in .then
                 } ,
	
			     //error handler if runFunction_Promise() failed, 
				 //it is commented as we copied it for convenience to {.catch(errorX => { }}
				 /*
                 errorX => {  //this name {errorX} must be the same as in {alert("Rejected: " + errorX))}
                     // вторая функция - запустится при вызове reject
                     alert("Rejected: " + errorX); // errorX is a rejectMe argument
			         hidePreloader(); 
			         $("#result").stop().fadeOut("slow",function(){ $(this).html(" Promise failed")}).fadeIn(2000);
                 }
				 */
		   
            )
			
			//then 2 chaining 
			.then(
			//below commented is quivalent to:   responseZZ => { alert("Done"); } == function resppp(){alert("Done");}
			//function resppp(){alert("Done");}
			   responseZZ => { 
			        alert("Done");
				}
		     )
			 
			 
             //catch
             .catch(errorX => {  //this name {errorX} must be the same as in {alert("Rejected: " + errorX))}
                     // вторая функция - запустится при вызове reject
                     alert("Rejected: " + errorX); // errorX is a rejectMe argument
			         hidePreloader(); 
			         $("#result").stop().fadeOut("slow",function(){ $(this).html(" Promise failed")}).fadeIn(2000);
                 });
	   
	}); 

	
	
	
	
	//function that returns promise
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     ** 
	function runFunction_Promise()
	{
		 return new Promise(function(resolveX, rejectMe) {
			 
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
				    resolveX(dataZ); //MUST HAVE, without it Promise will never switch to .then()
                 },  //end success
			     error: function (error) {
				    rejectMe(error);
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
	