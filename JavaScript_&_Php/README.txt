<b>#JS & PHP miscellaneous</b>

#Some other JS tips(callbacks,etc) can be found in {98.3.V.A example references (CSS,JS,Php)} in => 
               https://github.com/account931/yii2_REST_and_Rbac_2019/blob/master/Readme_YII2_mine_Common_Comands.txt

# Other additional Php tips (types, closure, Solid, design patterns) => see https://github.com/account931/Laravel-Yii2_Comment_Vote_widgets/blob/master/blog_Laravel/ReadMe_Laravel_Com_Commands.txt			   
			   
//=================================================== 			   
#Table on content:

1. "+" operator in JS vs PHP. {String + Int}
1.2. Functions in JS vs PHP
2.JS Closure
3.JS Class
4. Arrow functions ES6
5. Promise (axios example)
6. Cors in Ajax (Cross-origin resource sharing)(Same-Origin-Policy) => see https://github.com/account931/sms_Textbelt_Api_React_JS/blob/master/README_MY.txt

100.Php
100.1 Types Comparisons






//========================================================

1. "+" operator in JS vs PHP. {String + Int}
 #In JS {unar +} means  => Number(t) === +t; //i.e {var t} is cast to int, even if it was string. Type coercion
 
 #In JS {string} + {int} = {sting}. E.g =>  4 + 3 + "5" = "75"   E.g => 4 + 3 + "5" + 3 = "753" 
  BUT: "1" - - "1"; //2
       console.log(10+"1"); //101   both will be string
       console.log(10-"1"); //9     string will be taken as number
 
 #In PHP while +,  string type  is cast to int type =>
 
    $a = "3dollars";
    $b = 20;
    echo $a += $b; //returns 23
	
	
    $a1 = 2;
    $b1 ="string";
    echo ($a1 + $b1); //returns 2

	
	
	
	
	
	
//=========================================================
	
1.2. Functions in JS vs PHP

#Method returns the character at the specified index in a string.
   var res = str.charAt(0);        < === >  echo $myString[20];
   
#Extract characters from a string    
   var res = str.substring(1, 4);  < === > echo substr("Hello world",6);
   
#Split a string into an array 
   var res = str.split(" ")        < === > print_r (explode(" ",$str));
   
#Convert the elements of an array into a string:
   var energy = fruits.join();     < === >  echo implode(" ",$arr);
   
#Search an array for the item "X":
   var a = fruits.indexOf("Apple"); < === >  a=array("a"=>"red","b"=>"green","c"=>"blue"); echo array_search("red",$a);
   
#Convert different objects to strings:
  var res = String(x1); var n = num.toString();  < === > $items = (string)$var;
  
#Convert different object values to their numbers:
  var n = Number(x1) < === > $num = "3.14"; $int = (int)$num; $float = (float)$num;
	
//=========================================================

2.JS Closure

----------------- Info 1 ------------------
Зачем при вызове функции ставят две двойные скобки?
Вот пример
  var a = 1;
  function getFunc() {
   var a = 2;
    var func = function() { alert(a); };
   return func;
  }

  getFunc()(); // 2, из LexicalEnvironment функции getFunc
Зачем ставят getFunc()()? в чём разница между getFunc() ?
  
Функция getFunc() возвращает другую функцию (та что в переменной func). Вот вторые скобки нужны затем, чтобы вызвать функцию, которую вернула getFunc().
Что б вернуть не функцию, а результат который она возвращает.
Второй скобкой Вы как бы вызываете внутреннюю функцию которая берет выводит переменную a из замыкания.
Если скобки опустить, то return внешней функции вернет Вам не результат а саму функцию.
Можно сделать так:
var func = getFunc();
func(); // тут уже сработает alert(), который она вызывает


Правильным синтаксисом при инициализации результата замыкания обычно называют такой:
(getFunc())();

Все переменные внутри функции создаются при ее вызове и удаляются, после завершения функции.
Замыкания служат для одной единственной цели - сохранить какие-то переменные, после вызова функции.

----------------- Info 1 ------------------



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


  
  
  
  
  
 //=================================================== 
 4. Arrow functions ES6
 
// function expression: два способа в ES6
var f = function() { return 42; }
var f = () => 42;

// function declaration: один способ в ES6
function f() {
  return 42;
}




 //=================================================== 
5. Promise (axios example)

function axiosTest () {
     var strr = [];
       axios.get(url)
       .then(function(response){
               strr.push(response.data);
        })
        .catch(function(error){
               console.log(error);
           });
        return strr;
} 




 //=================================================== 
6. Cors in Ajax (Cross-origin resource sharing)(Same-Origin-Policy) => see https://github.com/account931/sms_Textbelt_Api_React_JS/blob/master/README_MY.txt









//=================================================== =============================================================================
//=================================================== 
//=================================================== 
//=================================================== 
//=================================================== 

100.Php
PHP Data Types:
String, Integer, Float (floating point numbers - also called double), Boolean, Array, Object, NULL, Resource


//===================================================
100.1 Types Comparisons. See => https://php.ru/manual/types.comparisons.html

The following things in Php are considered to be empty:

"" (an empty string)
0 (0 as an integer)
0.0 (0 as a float)
"0" (0 as a string)
NULL
FALSE
array() (an empty array)
var $var; (a variable declared, but without a value in a class)
Note that this is exactly the same list as for a coercion to Boolean false. empty is simply !isset($var) || !$var. Try isset instead.


Expression      | empty($x)
----------------+--------
$x = "";        | true    
$x = null       | true    
var $x;         | true    
$x is undefined | true    
$x = array();   | true    
$x = false;     | true    
$x = true;      | false   
$x = 1;         | false   
$x = 42;        | false   
$x = 0;         | true    
$x = -1;        | false   
$x = "1";       | false   
$x = "0";       | true    
$x = "-1";      | false   
$x = "php";     | false   
$x = "true";    | false   
$x = "false";   | false

empty('0'); // returns true, 
strlen('0'); // returns 1.

empty(array()); // returns true,
strlen(array()); // returns null with a Warning in PHP>=5.3 OR 5 with a Notice in PHP<5.3.

empty(0); // returns true,
strlen(0); // returns 1.













