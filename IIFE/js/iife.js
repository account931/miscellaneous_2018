$(document).ready(function(){
	
	//IIFE
	var getResult =(function () {
		
	    var d = "gone";
	    alert(d);  //will fire automatically, even without calling function  getResult();
	
	    return function bb(){
		    alert(1111)  // will fire on;ly upon calling function  getResult();
		};
    }() );
	
	
	
	
	getResult();
	
	
	
	
});
// end ready	
	