
Table on content:

1. "+" operator in JS vs PHP. {String + Int}
2.JS Closure
3.JS Class







//========================================================

1. "+" operator in JS vs PHP. {String + Int}
 #In JS {unar +} means  => Number(t) === +t; //i.e {var t} is cast to int, even if it was string. Type coercion
 
 #In JS {string} + {int} = {sting}. E.g =>  4 + 3 + "5" = "75"   E.g => 4 + 3 + "5" + 3 = "753"
 
 #In PHP while +,  string type  is cast to int type =>
 
    $a = "3dollars";
    $b = 20;
    echo $a += $b; //returns 23
	
	
    $a1 = 2;
    $b1 ="string";
    echo ($a1 + $b1); //returns 2

	
	
//=========================================================
2.JS Closure

https://itvolution.wordpress.com/2017/08/26/%D1%8F%D0%B7%D1%8B%D0%BA-javascript-%D0%B7%D0%B0%D0%BC%D1%8B%D0%BA%D0%B0%D0%BD%D0%B8%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-%D0%B2%D0%B8%D0%B4%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8-%D0%BB/

------Var 1 ------
  function makeCounter() {
      var currentCount = 1;

      return function() {
          return currentCount++;
      };
  }

  var counter = makeCounter();

  // testing....
  alert( counter() ); // 1
  alert( counter() ); // 2
  alert( counter() ); // 3


------ Var 2 ------
  function makeCounter() {
      var currentCount = 1;

      return { // возвратим объект вместо функции
          getNext: function() {
              return currentCount++;
       },

      set: function(value) {
          currentCount = value;
      },

      reset: function() {
          currentCount = 1;
      }
     };
  }
  
   //testing....
   var counter = makeCounter();

  
  alert( counter.getNext() ); // 1
  alert( counter.getNext() ); // 2

  counter.set(5);
  alert( counter.getNext() ); // 5



------ Var 3 ------

  function sum(a) {

      return function(b) {
          return a + b; // возьмет a из внешнего LexicalEnvironment
      };

   }


  //testing...... Чтобы вторые скобки в вызове работали – первые должны возвращать функцию.
  alert( sum(1)(2) );  //3
  alert( sum(5)(-1) ); //4
  
  
 ------ Var 4 Shooters ------

  function makeArmy() {

  var shooters = [];

  for (var i = 0; i < 10; i++) {

    var shooter = (function(x) {

      return function() {
        alert( x );
      };

    })(i);

    shooters.push(shooter);
  }


















//===================================================

3.JS Class

---- Variant with Class ----
  'use strict';
  class User {

      constructor(name) {
          this.name = name;
      }

      sayHi() {
         alert(this.name);
      }

   }

  let user = new User("Namer");
  user.sayHi(); // Namer
  
  ---- Same but on prototype -----
  function User(name) {
    this.name = name;
  }

  User.prototype.sayHi = function() {
     alert(this.name);
  };


