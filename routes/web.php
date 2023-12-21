<?php

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




Route::get('admin', ['as'=>'admin','uses'=>'Admin\AdminLoginController@loginAdmin']);
Route::post('loginadmin', ['as'=>'loginadmin','uses'=>'Admin\AdminLoginController@validateAdminLogin']);

Route::group(['middleware'=>['Admin']],function(){

	Route::get('dashadmin', ['as'=>'dashadmin','uses'=>'Admin\Dashboard\DashboardController@index']);
	
	Route::get('pilotslist', ['as'=>'pilotslist','uses'=>'Admin\Pilot\PilotsController@index']);
	
	Route::get('pilotslistcovid', ['as'=>'pilotslistcovid','uses'=>'Admin\Pilot\PilotsController@pilotslistcovid']);
	Route::any('pilotsearch', ['as'=>'pilotsearch','uses'=>'Admin\Pilot\PilotsController@getAllPilotForSearchPage']);
	Route::any('pilotsearchbystatecity', ['as'=>'pilotsearchbystatecity','uses'=>'Admin\Pilot\PilotsController@getAllPilotForSearchPageAfterSomeStateCityChange']);
	
	Route::get('ftoList', ['as'=>'ftoList','uses'=>'Admin\FTO\FTOController@index']);
	Route::get('ftosearch', ['as'=>'ftosearch','uses'=>'Admin\FTO\FTOController@getAllFTOForSearchPage']);
	Route::any('ftosearchbystatecity', ['as'=>'ftosearchbystatecity','uses'=>'Admin\FTO\FTOController@getAllFTOForSearchPageAfterSomeStateCityChange']);
	
	Route::any('ftoinstrctorlist', ['as'=>'ftoinstrctorlist','uses'=>'Admin\FTO\FTOInstructorController@index']);
	
	Route::get('admpilotapprove/{id}/{approvalVal}',['as'=>'admpilotapprove','uses'=>'Admin\Pilot\PilotsController@approvePilot']);
	
	Route::get('admpilotdisapprove/{id}/{approvalVal}',['as'=>'admpilotdisapprove','uses'=>'Admin\Pilot\PilotsController@approvePilot']);
	
	Route::get('courseslist', ['as'=>'courseslist','uses'=>'Admin\Course\CourseController@index']);
	Route::any('coursesearchadm', ['as'=>'coursesearchadm','uses'=>'Admin\Course\CourseController@getAllCourseForSearchPage']);
	Route::any('coursesearchstatecity', ['as'=>'coursesearchstatecity','uses'=>'Admin\Course\CourseController@getAllCourseForSearchPageAfterSomeStateCityChange']);

	Route::any('statelist', ['as'=>'statelist','uses'=>'Admin\Master\State\StateController@index']);

	Route::any('citylist', ['as'=>'citylist','uses'=>'Admin\Master\City\CityController@index']);
	
	Route::any('categorylist', ['as'=>'categorylist','uses'=>'Admin\Master\Category\CategoryController@index']);
	
	Route::any('durationlist', ['as'=>'durationlist','uses'=>'Admin\Master\Duration\DurationController@index']);
	
	Route::any('professionlist', ['as'=>'professionlist','uses'=>'Admin\Master\Profession\ProfessionController@index']);
	
	Route::any('sendmail', ['as'=>'sendmail','uses'=>'Admin\Mail\MailController@index']);
	
	Route::get('admftoapprove/{id}/{approvalVal}',['as'=>'admftoapprove','uses'=>'Admin\FTO\FTOController@approveFTO']);
	
	Route::get('logOutAdmin', ['as'=>'logOutAdmin','uses'=>'Admin\AdminLoginController@logOut']);
	
	Route::get('admftodisapprove/{id}/{approvalVal}',['as'=>'admftodisapprove','uses'=>'Admin\FTO\FTOController@approveFTO']);
	
	Route::post('saveadminadvertise',['as'=>'saveadminadvertise','uses'=>'Admin\Advertise\AdvertiseController@saveAdvertise']);
	
	Route::get('adminadvertiselist', ['as'=>'adminadvertiselist','uses'=>'Admin\Advertise\AdvertiseController@index']);
	
	Route::get('advertiseshowhidebyadmin/{id}/{approvalVal}',['as'=>'advertiseshowhidebyadmin','uses'=>'Admin\Advertise\AdvertiseController@approveAdvertise']);
	
	Route::get('advertiseapprovalbyadmin/{id}/{approvalVal}',['as'=>'advertiseapprovalbyadmin','uses'=>'Admin\Advertise\AdvertiseController@approveAdvertisebyadmin']);
	
	// Event
	Route::get('admineventlist', ['as'=>'admineventlist','uses'=>'Admin\Event\EventController@index']);
	
	Route::get('eventshowhidebyadmin/{id}/{approvalVal}',['as'=>'eventshowhidebyadmin','uses'=>'Admin\Event\EventController@approveEvent']);
	
	Route::get('eventapprovalbyadmin/{id}/{approvalVal}',['as'=>'eventapprovalbyadmin','uses'=>'Admin\Event\EventController@approveEventbyadmin']);
	
	Route::post('saveadminevent',['as'=>'saveadminevent','uses'=>'Admin\Event\EventController@saveEvent']);
	
	//Rating
	Route::get('ftorating', ['as'=>'ftorating','uses'=>'Admin\Rating\FTOController@index']);
	Route::get('admftorating/{id}/{ratingVal}', ['as'=>'admftorating','uses'=>'Admin\Rating\FTOController@admFTORating']);
	
	//Pilot
	Route::get('admpilotsrating', ['as'=>'admpilotsrating','uses'=>'Admin\Rating\PilotsController@index']);
	Route::get('admpilotrating/{id}/{ratingVal}', ['as'=>'admpilotrating','uses'=>'Admin\Rating\PilotsController@FTOPilotRating']);
	
 	//Instructor
 	Route::get('adminstructorrate', ['as'=>'adminstructorrate','uses'=>'Admin\Rating\FTOInstructorController@index']);
	Route::get('adminstructorrating/{id}/{ratingVal}', ['as'=>'adminstructorrating','uses'=>'Admin\Rating\FTOInstructorController@ftoInstructorRating']);
	
	//Rating End
	
	
	// News
	Route::get('adminnewslist', ['as'=>'adminnewslist','uses'=>'Admin\News\NewsController@index']);
	
	Route::post('saveadminnews',['as'=>'saveadminnews','uses'=>'Admin\News\NewsController@saveNews']);
	
	Route::get('newsshowhidebyadmin/{id}/{approvalVal}',['as'=>'newsshowhidebyadmin','uses'=>'Admin\News\NewsController@approveNews']);
	
	Route::get('newsapprovalbyadmin/{id}/{approvalVal}',['as'=>'newsapprovalbyadmin','uses'=>'Admin\News\NewsController@approveNewsbyadmin']);
	
	// Achievement
	
	Route::get('adminachievementlist', ['as'=>'adminachievementlist','uses'=>'Admin\Achievement\AchievementController@index']);
	
	Route::post('saveadminachievement',['as'=>'saveadminachievement','uses'=>'Admin\Achievement\AchievementController@saveAchievement']);
	
	Route::get('achievementshowhidebyadmin/{id}/{approvalVal}',['as'=>'achievementshowhidebyadmin','uses'=>'Admin\Achievement\AchievementController@approveAchievement']);
	
	Route::get('achievementapprovalbyadmin/{id}/{approvalVal}',['as'=>'achievementapprovalbyadmin','uses'=>'Admin\Achievement\AchievementController@approveAchievementbyadmin']);

	// Blog
	Route::get('adminbloglist', ['as'=>'adminbloglist','uses'=>'Admin\Blog\BlogController@index']);
	Route::post('saveadminblog',['as'=>'saveadminblog','uses'=>'Admin\Blog\BlogController@saveBlog']);
	Route::get('blogshowhidebyadmin/{id}/{approvalVal}',['as'=>'blogshowhidebyadmin','uses'=>'Admin\Blog\BlogController@approveBlog']);
	Route::get('blogapprovalbyadmin/{id}/{approvalVal}',['as'=>'blogapprovalbyadmin','uses'=>'Admin\Blog\BlogController@approveBlogbyadmin']);
	
	// Testimonials
	Route::get('admintestimonialslist', ['as'=>'admintestimonialslist','uses'=>'Admin\Testimonials\TestimonialsController@index']);
	Route::post('saveadmintestimonials',['as'=>'saveadmintestimonials','uses'=>'Admin\Testimonials\TestimonialsController@saveTestimonials']);
	Route::get('testimonialsshowhidebyadmin/{id}/{approvalVal}',['as'=>'testimonialsshowhidebyadmin','uses'=>'Admin\Testimonials\TestimonialsController@approveTestimonials']);
	
	// TPM
	Route::get('admintpmlist', ['as'=>'admintpmlist','uses'=>'Admin\TPM\TPMController@index']);
	Route::post('saveadmintpm',['as'=>'saveadmintpm','uses'=>'Admin\TPM\TPMController@saveTPM']);
	Route::get('tpmshowhidebyadmin/{id}/{approvalVal}',['as'=>'tpmshowhidebyadmin','uses'=>'Admin\TPM\TPMController@approveTPM']);
	Route::get('tpmapprovalbyadmin/{id}/{approvalVal}',['as'=>'tpmapprovalbyadmin','uses'=>'Admin\TPM\TPMController@approveTPMbyadmin']);
	
	// DGCA Press Release
	Route::get('adminDGCAPressReleaselist', ['as'=>'adminDGCAPressReleaselist','uses'=>'Admin\DGCAPressRelease\DGCAPressReleaseController@index']);
	Route::post('saveadminDGCAPressRelease', ['as'=>'saveadminDGCAPressRelease','uses'=>'Admin\DGCAPressRelease\DGCAPressReleaseController@saveDGCAPressRelease']);
	Route::get('DGCAPressReleaseshowhidebyadmin/{id}/{approvalVal}',['as'=>'DGCAPressReleaseshowhidebyadmin','uses'=>'Admin\DGCAPressRelease\DGCAPressReleaseController@approveDGCAPressRelease']);
	
	
	// Drone News Feed
	Route::get('adminDroneNewsFeedlist', ['as'=>'adminDroneNewsFeedlist','uses'=>'Admin\DroneNewsFeed\DroneNewsFeedController@index']);
	Route::post('saveadminDroneNewsFeed', ['as'=>'saveadminDroneNewsFeed','uses'=>'Admin\DroneNewsFeed\DroneNewsFeedController@saveDroneNewsFeed']);
	Route::get('DroneNewsFeedshowhidebyadmin/{id}/{approvalVal}',['as'=>'DroneNewsFeedshowhidebyadmin','uses'=>'Admin\DroneNewsFeed\DroneNewsFeedController@approveDroneNewsFeed']);
	
	// PhotoGallery
	
	Route::get('adminphotolist', ['as'=>'adminphotolist','uses'=>'Admin\PhotoGallery\PhotoGalleryController@index']);
	
	Route::post('saveadminphoto',['as'=>'saveadminphoto','uses'=>'Admin\PhotoGallery\PhotoGalleryController@savePhotoGallery']);
	
	Route::get('photoshowhidebyadmin/{id}/{approvalVal}',['as'=>'photoshowhidebyadmin','uses'=>'Admin\PhotoGallery\PhotoGalleryController@approvePhotoGallery']);
	
	Route::get('photoapprovalbyadmin/{id}/{approvalVal}',['as'=>'photoapprovalbyadmin','uses'=>'Admin\PhotoGallery\PhotoGalleryController@approvePhotoGallerybyadmin']);
	
	// VideoGallery
	
	Route::get('adminvideolist', ['as'=>'adminvideolist','uses'=>'Admin\VideoGallery\VideoGalleryController@index']);
	
	Route::post('saveadminvideo',['as'=>'saveadminvideo','uses'=>'Admin\VideoGallery\VideoGalleryController@saveVideoGallery']);
	
	Route::get('videoshowhidebyadmin/{id}/{approvalVal}',['as'=>'videoshowhidebyadmin','uses'=>'Admin\VideoGallery\VideoGalleryController@approveVideoGallery']);
	
	Route::get('videoapprovalbyadmin/{id}/{approvalVal}',['as'=>'videoapprovalbyadmin','uses'=>'Admin\VideoGallery\VideoGalleryController@approveVideoGallerybyadmin']);
	
	// Hire Pilot Route
	Route::get('allhirepilot', ['as'=>'allhirepilot','uses'=>'Admin\HirePilot\HirePilotController@index']);
	
	// Request A Callback Route
	Route::get('requestacallback', ['as'=>'requestacallback','uses'=>'Admin\RequestACallback\RequestACallbackController@index']);
	
	// Report An Error Route
	Route::get('reportanerrorlist', ['as'=>'reportanerrorlist','uses'=>'Admin\ReportAnError\ReportAnErrorController@index']);
	
	// Website Route
	
	Route::get('advisoryboardlist', ['as'=>'advisoryboardlist','uses'=>'Admin\Website\AdvisoryBoard\AdvisoryBoardController@index']);
	Route::post('saveadvisoryboard',['as'=>'saveadvisoryboard','uses'=>'Admin\Website\AdvisoryBoard\AdvisoryBoardController@saveAdvisoryBoard']);
	Route::get('advisoryboardshowhidebyadmin/{id}/{approvalVal}',['as'=>'advisoryboardshowhidebyadmin','uses'=>'Admin\Website\AdvisoryBoard\AdvisoryBoardController@approveAdvisoryBoard']);
	
});



