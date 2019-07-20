<?php
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::auth();

Route::get('/', 'PagesController@index');

Route::get('/news', 'PagesController@getNews');

Route::get('/history', 'PagesController@getHistory');

Route::get('/download/constitution', 'MaterialsDownloadController@downloadConstitution');

Route::get('/{sem_id}/courses', 'CoursesController@redirectCoursesWithId');

Route::resource('admin', 'AdminController');

Route::post('/courses', 'CoursesController@getCourse');

Route::get('/{course}/materials', 'CoursesController@getCourseMaterials');

Route::get('material/{id}/{type}/download', 'MaterialsDownloadController@downloadMaterial');

Route::get('/course', 'SearchController@searchCourse');