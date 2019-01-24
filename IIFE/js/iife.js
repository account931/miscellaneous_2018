$(document).ready(function(){
	
	//Revealing module pattern----------------
	var getResult =(function () {
		
	    var d = "I am used in revealing module pattern, fire automatically";
	    alert(d);  //will fire automatically, even without calling function  getResult();
	
	    return function bb(){
		    alert("called in {function bb} inside RMP by calling {getResult()}")  // will fire only upon calling function  getResult();
		};
    }() );
	
	
	getResult();
	
	
	
	//IIFE-------------------------------------
	(function () {
    // Code goes here
	    alert("Immediately-Invoked Function Expression) - IIFE, fires automatically"); //will fire automatically
    })();
	
	
});
// end ready	
	