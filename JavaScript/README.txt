<b>#JS miscellaneous</b>

#Some other JS tips(callbacks,etc) can be found in {98.3.V.A example references (CSS,JS,Php)} in => 
               https://github.com/account931/yii2_REST_and_Rbac_2019/blob/master/Readme_YII2_mine_Common_Comands.txt

			   
			   
//=================================================== 			   
#Table on content:

1. "+" operator in JS vs PHP. {String + Int}
2.JS Closure
3.JS Class
4. Arrow functions ES6
5. Promise (axios example)
6. Cors in Ajax (Cross-origin resource sharing)(Same-Origin-Policy) => see https://github.com/account931/sms_Textbelt_Api_React_JS/blob/master/README_MY.txt





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



//=================================================== 
//=================================================== 
//=================================================== 
//=================================================== 
//=================================================== 
