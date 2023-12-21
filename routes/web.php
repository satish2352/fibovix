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

Route::get('/', function () {
    return view('welcome');
});


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
	
	Route::any('ftoinstrctorlist', ['as'=>'ftoinstrctorlist','uses'=>'App\Http\Controllers\Admin\FTO\FTOInstructorController@index']);
	
	Route::get('admpilotapprove/{id}/{approvalVal}',['as'=>'admpilotapprove','uses'=>'App\Http\Controllers\Admin\Pilot\PilotsController@approvePilot']);
	
	Route::get('admpilotdisapprove/{id}/{approvalVal}',['as'=>'admpilotdisapprove','uses'=>'App\Http\Controllers\Admin\Pilot\PilotsController@approvePilot']);
	
	Route::get('courseslist', ['as'=>'courseslist','uses'=>'App\Http\Controllers\Admin\Course\CourseController@index']);
	Route::any('coursesearchadm', ['as'=>'coursesearchadm','uses'=>'App\Http\Controllers\Admin\Course\CourseController@getAllCourseForSearchPage']);
	Route::any('coursesearchstatecity', ['as'=>'coursesearchstatecity','uses'=>'App\Http\Controllers\Admin\Course\CourseController@getAllCourseForSearchPageAfterSomeStateCityChange']);

	Route::any('statelist', ['as'=>'statelist','uses'=>'App\Http\Controllers\Admin\Master\State\StateController@index']);

	Route::any('citylist', ['as'=>'citylist','uses'=>'App\Http\Controllers\Admin\Master\City\CityController@index']);
	
	Route::any('categorylist', ['as'=>'categorylist','uses'=>'App\Http\Controllers\Admin\Master\Category\CategoryController@index']);
	
	Route::any('durationlist', ['as'=>'durationlist','uses'=>'App\Http\Controllers\Admin\Master\Duration\DurationController@index']);
	
	Route::any('professionlist', ['as'=>'professionlist','uses'=>'App\Http\Controllers\Admin\Master\Profession\ProfessionController@index']);
	
	Route::any('sendmail', ['as'=>'sendmail','uses'=>'App\Http\Controllers\Admin\Mail\MailController@index']);
	
	Route::get('admftoapprove/{id}/{approvalVal}',['as'=>'admftoapprove','uses'=>'App\Http\Controllers\Admin\FTO\FTOController@approveFTO']);
	
	Route::get('logOutAdmin', ['as'=>'logOutAdmin','uses'=>'App\Http\Controllers\Admin\AdminLoginController@logOut']);
	
	Route::get('admftodisapprove/{id}/{approvalVal}',['as'=>'admftodisapprove','uses'=>'App\Http\Controllers\Admin\FTO\FTOController@approveFTO']);
	
	Route::post('saveadminadvertise',['as'=>'saveadminadvertise','uses'=>'App\Http\Controllers\Admin\Advertise\AdvertiseController@saveAdvertise']);
	
	Route::get('adminadvertiselist', ['as'=>'adminadvertiselist','uses'=>'App\Http\Controllers\Admin\Advertise\AdvertiseController@index']);
	
	Route::get('advertiseshowhidebyadmin/{id}/{approvalVal}',['as'=>'advertiseshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\Advertise\AdvertiseController@approveAdvertise']);
	
	Route::get('advertiseapprovalbyadmin/{id}/{approvalVal}',['as'=>'advertiseapprovalbyadmin','uses'=>'App\Http\Controllers\Admin\Advertise\AdvertiseController@approveAdvertisebyadmin']);
	
	// Event
	Route::get('admineventlist', ['as'=>'admineventlist','uses'=>'App\Http\Controllers\Admin\Event\EventController@index']);
	
	Route::get('eventshowhidebyadmin/{id}/{approvalVal}',['as'=>'eventshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\Event\EventController@approveEvent']);
	
	Route::get('eventapprovalbyadmin/{id}/{approvalVal}',['as'=>'eventapprovalbyadmin','uses'=>'App\Http\Controllers\Admin\Event\EventController@approveEventbyadmin']);
	
	Route::post('saveadminevent',['as'=>'saveadminevent','uses'=>'App\Http\Controllers\Admin\Event\EventController@saveEvent']);
	
	//Rating
	Route::get('ftorating', ['as'=>'ftorating','uses'=>'App\Http\Controllers\Admin\Rating\FTOController@index']);
	Route::get('admftorating/{id}/{ratingVal}', ['as'=>'admftorating','uses'=>'App\Http\Controllers\Admin\Rating\FTOController@admFTORating']);
	
	//Pilot
	Route::get('admpilotsrating', ['as'=>'admpilotsrating','uses'=>'App\Http\Controllers\Admin\Rating\PilotsController@index']);
	Route::get('admpilotrating/{id}/{ratingVal}', ['as'=>'admpilotrating','uses'=>'App\Http\Controllers\Admin\Rating\PilotsController@FTOPilotRating']);
	
 	//Instructor
 	Route::get('adminstructorrate', ['as'=>'adminstructorrate','uses'=>'App\Http\Controllers\Admin\Rating\FTOInstructorController@index']);
	Route::get('adminstructorrating/{id}/{ratingVal}', ['as'=>'adminstructorrating','uses'=>'App\Http\Controllers\Admin\Rating\FTOInstructorController@ftoInstructorRating']);
	
	//Rating End
	
	
	// News
	Route::get('adminnewslist', ['as'=>'adminnewslist','uses'=>'App\Http\Controllers\Admin\News\NewsController@index']);
	
	Route::post('saveadminnews',['as'=>'saveadminnews','uses'=>'App\Http\Controllers\Admin\News\NewsController@saveNews']);
	
	Route::get('newsshowhidebyadmin/{id}/{approvalVal}',['as'=>'newsshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\News\NewsController@approveNews']);
	
	Route::get('newsapprovalbyadmin/{id}/{approvalVal}',['as'=>'newsapprovalbyadmin','uses'=>'App\Http\Controllers\Admin\News\NewsController@approveNewsbyadmin']);
	
	// Achievement
	
	Route::get('adminachievementlist', ['as'=>'adminachievementlist','uses'=>'App\Http\Controllers\Admin\Achievement\AchievementController@index']);
	
	Route::post('saveadminachievement',['as'=>'saveadminachievement','uses'=>'App\Http\Controllers\Admin\Achievement\AchievementController@saveAchievement']);
	
	Route::get('achievementshowhidebyadmin/{id}/{approvalVal}',['as'=>'achievementshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\Achievement\AchievementController@approveAchievement']);
	
	Route::get('achievementapprovalbyadmin/{id}/{approvalVal}',['as'=>'achievementapprovalbyadmin','uses'=>'App\Http\Controllers\Admin\Achievement\AchievementController@approveAchievementbyadmin']);

	// Blog
	Route::get('adminbloglist', ['as'=>'adminbloglist','uses'=>'App\Http\Controllers\Admin\Blog\BlogController@index']);
	Route::post('saveadminblog',['as'=>'saveadminblog','uses'=>'App\Http\Controllers\Admin\Blog\BlogController@saveBlog']);
	Route::get('blogshowhidebyadmin/{id}/{approvalVal}',['as'=>'blogshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\Blog\BlogController@approveBlog']);
	Route::get('blogapprovalbyadmin/{id}/{approvalVal}',['as'=>'blogapprovalbyadmin','uses'=>'App\Http\Controllers\Admin\Blog\BlogController@approveBlogbyadmin']);
	
	// Testimonials
	Route::get('admintestimonialslist', ['as'=>'admintestimonialslist','uses'=>'App\Http\Controllers\Admin\Testimonials\TestimonialsController@index']);
	Route::post('saveadmintestimonials',['as'=>'saveadmintestimonials','uses'=>'App\Http\Controllers\Admin\Testimonials\TestimonialsController@saveTestimonials']);
	Route::get('testimonialsshowhidebyadmin/{id}/{approvalVal}',['as'=>'testimonialsshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\Testimonials\TestimonialsController@approveTestimonials']);
	
	// TPM
	Route::get('admintpmlist', ['as'=>'admintpmlist','uses'=>'App\Http\Controllers\Admin\TPM\TPMController@index']);
	Route::post('saveadmintpm',['as'=>'saveadmintpm','uses'=>'App\Http\Controllers\Admin\TPM\TPMController@saveTPM']);
	Route::get('tpmshowhidebyadmin/{id}/{approvalVal}',['as'=>'tpmshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\TPM\TPMController@approveTPM']);
	Route::get('tpmapprovalbyadmin/{id}/{approvalVal}',['as'=>'tpmapprovalbyadmin','uses'=>'App\Http\Controllers\Admin\TPM\TPMController@approveTPMbyadmin']);
	
	// DGCA Press Release
	Route::get('adminDGCAPressReleaselist', ['as'=>'adminDGCAPressReleaselist','uses'=>'App\Http\Controllers\Admin\DGCAPressRelease\DGCAPressReleaseController@index']);
	Route::post('saveadminDGCAPressRelease', ['as'=>'saveadminDGCAPressRelease','uses'=>'App\Http\Controllers\Admin\DGCAPressRelease\DGCAPressReleaseController@saveDGCAPressRelease']);
	Route::get('DGCAPressReleaseshowhidebyadmin/{id}/{approvalVal}',['as'=>'DGCAPressReleaseshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\DGCAPressRelease\DGCAPressReleaseController@approveDGCAPressRelease']);
	
	
	// Drone News Feed
	Route::get('adminDroneNewsFeedlist', ['as'=>'adminDroneNewsFeedlist','uses'=>'App\Http\Controllers\Admin\DroneNewsFeed\DroneNewsFeedController@index']);
	Route::post('saveadminDroneNewsFeed', ['as'=>'saveadminDroneNewsFeed','uses'=>'App\Http\Controllers\Admin\DroneNewsFeed\DroneNewsFeedController@saveDroneNewsFeed']);
	Route::get('DroneNewsFeedshowhidebyadmin/{id}/{approvalVal}',['as'=>'DroneNewsFeedshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\DroneNewsFeed\DroneNewsFeedController@approveDroneNewsFeed']);
	
	// PhotoGallery
	
	Route::get('adminphotolist', ['as'=>'adminphotolist','uses'=>'App\Http\Controllers\Admin\PhotoGallery\PhotoGalleryController@index']);
	
	Route::post('saveadminphoto',['as'=>'saveadminphoto','uses'=>'App\Http\Controllers\Admin\PhotoGallery\PhotoGalleryController@savePhotoGallery']);
	
	Route::get('photoshowhidebyadmin/{id}/{approvalVal}',['as'=>'photoshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\PhotoGallery\PhotoGalleryController@approvePhotoGallery']);
	
	Route::get('photoapprovalbyadmin/{id}/{approvalVal}',['as'=>'photoapprovalbyadmin','uses'=>'App\Http\Controllers\Admin\PhotoGallery\PhotoGalleryController@approvePhotoGallerybyadmin']);
	
	// VideoGallery
	
	Route::get('adminvideolist', ['as'=>'adminvideolist','uses'=>'App\Http\Controllers\Admin\VideoGallery\VideoGalleryController@index']);
	
	Route::post('saveadminvideo',['as'=>'saveadminvideo','uses'=>'App\Http\Controllers\Admin\VideoGallery\VideoGalleryController@saveVideoGallery']);
	
	Route::get('videoshowhidebyadmin/{id}/{approvalVal}',['as'=>'videoshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\VideoGallery\VideoGalleryController@approveVideoGallery']);
	
	Route::get('videoapprovalbyadmin/{id}/{approvalVal}',['as'=>'videoapprovalbyadmin','uses'=>'App\Http\Controllers\Admin\VideoGallery\VideoGalleryController@approveVideoGallerybyadmin']);
	
	// Hire Pilot Route
	Route::get('allhirepilot', ['as'=>'allhirepilot','uses'=>'App\Http\Controllers\Admin\HirePilot\HirePilotController@index']);
	
	// Request A Callback Route
	Route::get('requestacallback', ['as'=>'requestacallback','uses'=>'App\Http\Controllers\Admin\RequestACallback\RequestACallbackController@index']);
	
	// Report An Error Route
	Route::get('reportanerrorlist', ['as'=>'reportanerrorlist','uses'=>'App\Http\Controllers\Admin\ReportAnError\ReportAnErrorController@index']);
	
	// Website Route
	
	Route::get('advisoryboardlist', ['as'=>'advisoryboardlist','uses'=>'App\Http\Controllers\Admin\Website\AdvisoryBoard\AdvisoryBoardController@index']);
	Route::post('saveadvisoryboard',['as'=>'saveadvisoryboard','uses'=>'App\Http\Controllers\Admin\Website\AdvisoryBoard\AdvisoryBoardController@saveAdvisoryBoard']);
	Route::get('advisoryboardshowhidebyadmin/{id}/{approvalVal}',['as'=>'advisoryboardshowhidebyadmin','uses'=>'App\Http\Controllers\Admin\Website\AdvisoryBoard\AdvisoryBoardController@approveAdvisoryBoard']);
	
});



