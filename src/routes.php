<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('calculator/add/{a}/{b}', 'Niccolomeloni\Calculator\CalculatorController@add');
Route::get('calculator/subtract/{a}/{b}', 'Niccolomeloni\Calculator\CalculatorController@subtract');
