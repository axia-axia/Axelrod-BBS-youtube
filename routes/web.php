<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\TaskController;


//task

Route::get('/toppageArt', 'TaskController@toppageArt')->name('task.toppageArt');
Route::get('/toppageBook', 'TaskController@toppageBook')->name('task.toppageBook');
Route::get('/toppageBusiness', 'TaskController@toppageBusiness')->name('task.toppageBusiness');
Route::get('/toppageAutomobile', 'TaskController@toppageAutomobile')->name('task.toppageAutomobile');
Route::get('/toppageCharity', 'TaskController@toppageCharity')->name('task.toppageCharity');
Route::get('/toppageCulture', 'TaskController@toppageCulture')->name('task.toppageCulture');
Route::get('/toppageDiy', 'TaskController@toppageDiy')->name('task.toppageDiy');
Route::get('/toppageFinance', 'TaskController@toppageFinance')->name('task.toppageFinance');
Route::get('/toppageGame', 'TaskController@toppageGame')->name('task.toppageGame');
Route::get('/toppageMedical', 'TaskController@toppageMedical')->name('task.toppageMedical');
Route::get('/toppageHowTo', 'TaskController@toppageHowTo')->name('task.toppageHowTo');
Route::get('/toppageMentalmind', 'TaskController@toppageMentalmind')->name('task.toppageMentalmind');
Route::get('/toppageMusic', 'TaskController@toppageMusic')->name('task.toppageMusic');
Route::get('/toppageScience', 'TaskController@toppageScience')->name('task.toppageScience');
Route::get('/toppageComputerMobile', 'TaskController@toppageComputerMobile')->name('task.toppageComputerMobile');
Route::get('/toppageSports', 'TaskController@toppageSports')->name('task.toppageSports');
Route::get('/toppageTvMovie', 'TaskController@toppageTvMovie')->name('task.toppageTvMovie');
Route::get('/toppageTravel', 'TaskController@toppageTravel')->name('task.toppageTravel');
Route::get('/toppageLife', 'TaskController@toppageLife')->name('task.toppageLife');
Route::get('/toppageBeauty', 'TaskController@toppageBeauty')->name('task.toppageBeauty');
Route::get('/toppageFood', 'TaskController@toppageFood')->name('task.toppageFood');
Route::get('/', 'TaskController@toppage')->name('task.toppage');

Route::get('/submitted', 'TaskController@submitted')->name('task.submitted');
Route::post('/store', 'TaskController@store')->name('task.store');
Route::post('/delete', 'TaskController@delete')->name('task.delete');
