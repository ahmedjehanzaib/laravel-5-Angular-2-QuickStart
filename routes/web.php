<?php

Route::get('/{any?}', [
    'uses' => 'ExampleControllers\AngularRoutesController@index',
    'as' => 'home'
]);

// API route
Route::post('/api/upload-file', 'ExampleControllers\UploadController@uploadFile');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
