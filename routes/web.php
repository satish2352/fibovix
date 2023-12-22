<?php
use Illuminate\Support\Facades\Route;
/*allTestimonialsList 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\Website\IndexController::class, 'index']);



Route::get('/admin', [App\Http\Controllers\Admin\AdminLoginController::class, 'loginAdmin']);


// Route::get('/admin', ['as'=>'/admin','uses'=>'App\Http\Controllers\Admin\AdminLoginController@loginAdmin']);
Route::post('loginadmin', ['as'=>'loginadmin','uses'=>'App\Http\Controllers\Admin\AdminLoginController@validateAdminLogin']);

Route::group(['middleware'=>['Admin']],function(){

	Route::get('dashadmin', ['as'=>'dashadmin','uses'=>'App\Http\Controllers\Admin\Dashboard\DashboardController@index']);
	
	Route::get('pilotslist', ['as'=>'pilotslist','uses'=>'App\Http\Controllers\Admin\Pilot\PilotsController@index']);
	
	Route::get('pilotslistcovid', ['as'=>'pilotslistcovid','uses'=>'App\Http\Controllers\Admin\Pilot\PilotsController@pilotslistcovid']);
	Route::any('pilotsearch', ['as'=>'pilotsearch','uses'=>'App\Http\Controllers\Admin\Pilot\PilotsController@getAllPilotForSearchPage']);
	Route::any('pilotsearchbystatecity', ['as'=>'pilotsearchbystatecity','uses'=>'App\Http\Controllers\Admin\Pilot\PilotsController@getAllPilotForSearchPageAfterSomeStateCityChange']);
	
	Route::get('ftoList', ['as'=>'ftoList','uses'=>'App\Http\Controllers\Admin\FTO\FTOController@index']);
	Route::get('ftosearch', ['as'=>'ftosearch','uses'=>'App\Http\Controllers\Admin\FTO\FTOController@getAllFTOForSearchPage']);
	Route::any('ftosearchbystatecity', ['as'=>'ftosearchbystatecity','uses'=>'App\Http\Controllers\Admin\FTO\FTOController@getAllFTOForSearchPageAfterSomeStateCityChange']);


	// Website Route
	
	Route::get('advisoryboardlist', ['as'=>'advisoryboardlist','uses'=>'App\Http\Controllers\Admin\Website\AdvisoryBoard\AdvisoryBoardController@index']);
	Route::post('saveadvisoryboard',['as'=>'saveadvisoryboard','uses'=>'App\Http\Controllers\Admin\Website\AdvisoryBoard\AdvisoryBoardController@saveAdvisoryBoard']);
	Route::get('advisoryboardshowhidebyadmin/{id}/{approvalVal}',['as'=>'advisoryboardshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\Website\AdvisoryBoard\AdvisoryBoardController@approveAdvisoryBoard']);
	Route::get('logOutAdmin', ['as'=>'logOutAdmin','uses'=>'Admin\AdminLoginController@logOut']);
});



