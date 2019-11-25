<?php

//Example Usage of getters, setters and magic methods.

//GETTERS, GETTERS => Your own getter, setter (getNamex(),setNamex()) make it possible to set and get value of a Class private variables outse of the Class. 
//If u attempt to do it without getter/setter or magic m u'll get the error. If have getter/setter but try to access non-existing var -> it will cause the crash
//You have to write getter/setter for every private var u have
//You can not call getters/setters without {get}, {set} prefix unless u specify it in Magic methods

//Magic methods => they can be used instead of writing getter/setter for every private var u have. They are triggered every time u try to access private or non-existing(???) var 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 echo "<p>Gettters, Setters + Magic methods";
 
 
 class X
 {
	 private $nameX = '2';
	 
	 //just for test
	 public function say($textX = false){
		 $textX ? $t =$textX : $t ='default agr';
		 echo "<br>". $t ."</br></br>";
	 }
	 

	
	 
	 //my SETTER that makes it possible to set a private var outside the class
	  public function getNamex(){
		  echo $this->nameX;
	  }
	  
	  //my GETTER that makes it possible to get a private var outside the class
	   public function setNamex($value){
		  $this->nameX = $value;
	  }
	  
	  
	 //Magic Methods Section --------
	 //MAGIC __get(), is triggered when u try to access any!!! private var 
	 public function __get( $key )
     {
        return $this-> $key;
     } 
	
	
	 //MAGIC __set(), is triggered when u try to change value of any!!! private var 
	 public function __set($key, $value){
       return $this->$key = $value;
     }

	 //is triggered when u try to call any non-existing function
	 public function __call($function, $args) {
            $args = implode(', ', $args);
            echo "<br><br>You attempted to call to $function() with args '$args' is not possible as it does not exist! Set in __call <br>";
        }
		
 }
 
 
 
 //-------------------------------------------------------------
 
 
 $b = new X();
 $b->say('OK'); //just test
 
 //trying your custom hand-made Getter/Setter
 $b->setNamex('I am set in my custom Setter'); //assign value to the private var via SETTER (outside the class)
 $b->getNamex(); //gets the private var value via GETTER (outside the class). //echo "I am set in my custom Setter"
 
 //trying magic methods
 echo "<br>". $b->nameX; //trying to access a private var directly, it will trigger {MAGIC function __get( $key )} and will display private $nameX value. Without {__get} it will launch an error
 $b->nameX = 'This value is set in Magic __set'; //assign value to the private var via magic __set()
 echo "<br>". $b->nameX; //gets the private var value via __get() //will echo 'This value is set in Magic __set'
 $b->non_exist_funct(); //calling non-existing function //will trigger __call() and will echo message from __call() 

 //with magic methods u can even proceed with non-existing vars
 $b->not_existin_var = 'This value for {not_existin_var} is set in Magic __set';
 echo "<br>". $b->not_existin_var; //echo 'This value for {not_existin_var} is set in Magic __set'
 
 ?>