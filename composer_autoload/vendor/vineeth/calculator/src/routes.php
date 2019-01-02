<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Cubet\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Cubet\Calculator\CalculatorController@subtract');