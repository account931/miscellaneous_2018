$(document).ready(function(){
	
	//IIFE
	var getResult =(function () {
		
	    var d = "gone";
	    alert(d);
	
	    return function bb(){
		    alert(1111)
		};
    }() );
	
	
	getResult();
	
	
	
	
});
// end ready	
	