<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\TaskController;


//task

Route::get('/toppageArt', 'TaskController@toppageArt')->name('task.toppageArt');
Route::get('/toppageBook', 'TaskController@toppageBook')->name('task.toppageBook');
Route::get('/toppageBusiness', 'TaskController@toppageBusiness')->name('task.toppageBusiness');
Route::get('/toppageCarbike', 'TaskController@toppageCarbike')->name('task.toppageCarbike');
Route::get('/toppageCharity', 'TaskController@toppageCharity')->name('task.toppageCharity');
Route::get('/toppageCulture', 'TaskController@toppageCulture')->name('task.toppageCulture');
Route::get('/toppageDiy', 'TaskController@toppageDiy')->name('task.toppageDiy');
Route::get('/toppageFinance', 'TaskController@toppageFinance')->name('task.toppageFinance');
Route::get('/toppageGame', 'TaskController@toppageGame')->name('task.toppageGame');
Route::get('/toppageHealth', 'TaskController@toppageHealth')->name('task.toppageHealth');
Route::get('/toppageHowto', 'TaskController@toppageHowto')->name('task.toppageHowto');
Route::get('/toppageMentalmind', 'TaskController@toppageMentalmind')->name('task.toppageMentalmind');
Route::get('/toppageMusic', 'TaskController@toppageMusic')->name('task.toppageMusic');
Route::get('/toppageNewitem', 'TaskController@toppageNewitem')->name('task.toppageNewitem');
Route::get('/toppagePcmobile', 'TaskController@toppagePcmobile')->name('task.toppagePcmobile');
Route::get('/toppageSports', 'TaskController@toppageSports')->name('task.toppageSports');
Route::get('/toppageTvmovie', 'TaskController@toppageTvmovie')->name('task.toppageTvmovie');
Route::get('/toppageTravel', 'TaskController@toppageTravel')->name('task.toppageTravel');
Route::get('/toppageLifestyle', 'TaskController@toppageLifestyle')->name('task.toppageLifestyle');
Route::get('/toppageBeauty', 'TaskController@toppageBeauty')->name('task.toppageBeauty');
Route::get('/toppageFood', 'TaskController@toppageFood')->name('task.toppageFood');
Route::get('/', 'TaskController@toppage')->name('task.toppage');

Route::get('/create', 'TaskController@create')->name('task.create');
Route::get('/submitted', 'TaskController@submitted')->name('task.submitted');
Route::post('/store', 'TaskController@store')->name('task.store');
Route::get('/delete/{id}', 'TaskController@delete')->name('task.delete');
