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

// For Website

//fto 
Route::get('ftoregform',['as'=>'ftoregform','uses'=>'Website\FTO\FTORegistrationController@index']);
Route::post('saveftoregform',['as'=>'saveftoregform','uses'=>'Website\FTO\FTORegistrationController@saveRegForm']);
Route::post('ftootpverified', ['as'=>'ftootpverified','uses'=>'Website\FTO\FTORegistrationController@ftootpverified']);
Route::get('webftosearch',['as'=>'webftosearch','uses'=>'Website\FTO\FTOController@webFtoSearch']);
Route::any('webftosearchbystatecity', ['as'=>'webftosearchbystatecity','uses'=>'Website\FTO\FTOController@getAllFTOForSearchPageAfterSomeStateCityChange']);

//Pilot
Route::get('pilotregform',['as'=>'pilotregform','uses'=>'Website\Pilot\PilotRegistrationController@index']);
Route::post('savepilotregform',['as'=>'savepilotregform','uses'=>'Website\Pilot\PilotRegistrationController@saveRegForm']);
Route::post('pilototpverified', ['as'=>'pilototpverified','uses'=>'Website\Pilot\PilotRegistrationController@pilototpverified']);
Route::get('webpilotsearch',['as'=>'webpilotsearch','uses'=>'Website\Pilot\PilotsController@webPilotSearch']);
Route::any('webpilotsearchbystatecity', ['as'=>'webpilotsearchbystatecity','uses'=>'Website\Pilot\PilotsController@getAllPilotForSearchPageAfterSomeStateCityChange']);
Route::any('pilotdetails/{id}', ['as'=>'pilotdetails','uses'=>'Website\Pilot\PilotsController@pilotDetails']);
Route::any('ftodetails/{id}', ['as'=>'ftodetails','uses'=>'Website\FTO\FTOController@ftoDetails']);

Route::post('function/city_by_state', 'Website\Pilot\PilotRegistrationController@getCityByState')->name('func.city.by.state');
Route::post('/login/submit', 'Website\Pilot\PilotRegistrationController@login')->name('fto.login.submit');


// Courses

Route::get('webcoursessearch',['as'=>'webcoursessearch','uses'=>'Website\Courses\CoursesController@webCoursesSearch']);
Route::any('webcourseserachajax',['as'=>'webcourseserachajax','uses'=>'Website\Courses\CoursesController@getWebCourseSerachAjax']);
Route::get('webcoursedetails/{id}',['as'=>'webcoursedetails','uses'=>'Website\Courses\CoursesController@webcourseDetails']);
Route::get('allAdvertise',['as'=>'allAdvertise','uses'=>'Website\Advertise\AdvertiseController@getAllAdvertiseList']);

// Web DGCS Press Release
Route::any('webDGCSPressRelease', ['as'=>'webDGCSPressRelease','uses'=>'Website\DGCSPressRelease\DGCSPressReleaseController@index']);

// Web Drone News Feed
Route::any('webDroneNewsFeed', ['as'=>'webDroneNewsFeed','uses'=>'Website\DroneNewsFeed\DroneNewsFeedController@index']);


// Old Project Route
Route::get('/',['as'=>'/','uses'=>'Website\Advertise\AdvertiseController@getAllAdvertiseList']);
Route::get('index',['as'=>'index','uses'=>'Website\Advertise\AdvertiseController@getAllAdvertiseList']);

//Route::get('/',['as'=>'/','uses'=>'Website\Testimonials\TestimonialsController@getAllTestimonialsList']);
//Route::get('index',['as'=>'index','uses'=>'Website\Testimonials\TestimonialsController@getAllTestimonialsList']);



// Route::get('/', function () {
//     return view('website.index');
// });

// Route::get('index', function () {
//     return view('website.index');
// });
Route::get('about', function () {
    return view('website.about');
});
Route::get('library', function () {
    return view('website.library-membership');
});

// Route::get('advisoryboard', function () {
//     return view('website.advisoryboard');
// });

Route::get('advisoryboard', ['as'=>'advisoryboard','uses'=>'Website\AdvisoryBoard\AdvisoryBoardController@getAllAdvisoryBoardList']);

Route::get('photogallery', ['as'=>'photogallery','uses'=>'Website\PhotoGallery\PhotoGalleryController@getAllPhotoGalleryList']);

Route::get('videogallery', ['as'=>'videogallery','uses'=>'Website\VideoGallery\VideoGalleryController@getAllVideoGalleryList']);

// Route::get('instructorlist', function () {
//     return view('website.instructor-list');
// });

Route::any('ftoinstrctorlistweb', ['as'=>'ftoinstrctorlistweb','uses'=>'Website\FTO\FTOInstructorController@index']);


Route::get('hirepilot', ['as'=>'hirepilot','uses'=>'Website\Pilot\PilotsController@hirePilot']);
Route::post('hirepilotsave', ['as'=>'hirepilotsave','uses'=>'Website\Pilot\PilotsController@hirePilotSave']);


// Request a Callback
Route::get('requestcallback', ['as'=>'requestcallback','uses'=>'Website\Footer\RequestcallbackController@requestacallBack']);
Route::post('requestacallbacksave', ['as'=>'requestacallbacksave','uses'=>'Website\Footer\RequestcallbackController@requestacallbacksave']);
Route::post('requestacallBackotpverified', ['as'=>'requestacallBackotpverified','uses'=>'Website\Footer\RequestcallbackController@requestacallBackotpverified']);

// Report an Error
Route::get('reportanerror', ['as'=>'reportanerror','uses'=>'Website\Footer\ReportanerrorController@reportanError']);
Route::post('reportanerrorsave', ['as'=>'reportanerrorsave','uses'=>'Website\Footer\ReportanerrorController@reportanerrorsave']);



Route::get('comingsoon', function () {
    return view('website.coming-soon');
});



// Route::get('eventsearch', function () {
    
//     // return view('website.event.eventdetail');
//     return view('website.event.eventsearch');
// });


Route::get('eventsearch', ['as'=>'eventsearch','uses'=>'Website\Event\EventController@getAllEventList']);

Route::get('eventdetails/{id}',['as'=>'eventdetails','uses'=>'Website\Event\EventController@eventDetails']);

Route::get('govtpolicies', function () {
    return view('website.indian_goverment_policies');
});



// Route::get('/', function () {
//     return view('website.index');
// })->name('index');

Route::get('/instructor-list', function () {
    return view('instructor-list');
})->name('instructor-list');
Route::get('/indian-goverment-policies', function () {
    return view('indian_goverment_policies');
})->name('indian_goverment_policies');
Route::get('/library-membership', function () {
    return view('library-membership');
})->name('library-membership');

Route::get('coming-soon', function () {
    return view('coming-soon');
});


Route::get('uaopverification', function () {
    return view('website.uaop-verification');
});
Route::post('uaopverification',['as'=>'uaopverification','uses'=>'Website\Pilot\PilotsController@uaopVerification']);




// Old Project Route End




Route::get('getpilotprofile', ['as'=>'getpilotprofile','uses'=>'Pilot\Profile\ProfileController@index']);
Route::post('updatepilotprofile', ['as'=>'updatepilotprofile','uses'=>'Pilot\Profile\ProfileController@updatepilotprofile']);

Route::any('getpilotchangemobile', ['as'=>'getpilotchangemobile','uses'=>'Pilot\Profile\changepasswordController@getpilotchangemobile']);
Route::any('updatepilotchangemobile', ['as'=>'updatepilotchangemobile','uses'=>'Pilot\Profile\changepasswordController@updatepilotchangemobile']);
Route::any('updatepilotverifiedmobile', ['as'=>'updatepilotverifiedmobile','uses'=>'Pilot\Profile\changepasswordController@updatepilotverifiedmobile']);

Route::get('getpilotchangepassword', ['as'=>'getpilotchangepassword','uses'=>'Pilot\Profile\changepasswordController@index']);
Route::any('updatepilotchangepasswordverify', ['as'=>'updatepilotchangepasswordverify','uses'=>'Pilot\Profile\changepasswordController@updatepilotchangepasswordverify']);
Route::any('updatepilotchangepassword', ['as'=>'updatepilotchangepassword','uses'=>'Pilot\Profile\changepasswordController@updatepilotchangepassword']);


Route::get('admin', ['as'=>'admin','uses'=>'Admin\AdminLoginController@loginAdmin']);
Route::post('loginadmin', ['as'=>'loginadmin','uses'=>'Admin\AdminLoginController@validateAdminLogin']);

Route::get('fto', ['as'=>'fto','uses'=>'FTO\FTOLoginController@loginFTO']);
Route::post('loginfto', ['as'=>'loginfto','uses'=>'FTO\FTOLoginController@validateFTOLogin']);

Route::get('pilot', ['as'=>'pilot','uses'=>'Pilot\PilotLoginController@loginPilot']);
Route::post('loginpilot', ['as'=>'loginpilot','uses'=>'Pilot\PilotLoginController@validatePilotLogin']);


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





    Route::get('mail', ['as'=>'mail','uses'=>'Admin\Mail\MailController@mailTo']);

    Route::group(['middleware'=>['FTO']],function(){

	Route::get('dashfto', ['as'=>'dashfto','uses'=>'FTO\Dashboard\DashboardController@index']);
	
	Route::any('ftoinstrctorlistbyfto', ['as'=>'ftoinstrctorlistbyfto','uses'=>'FTO\Instructor\FTOInstructorController@index']);
	
	Route::get('ftopilotlist', ['as'=>'ftopilotlist','uses'=>'FTO\Pilot\PilotsController@index']);
	Route::any('pilotsearchbyfto', ['as'=>'pilotsearchbyfto','uses'=>'FTO\Pilot\PilotsController@getAllPilotForSearchPage']);
	Route::any('pilotsearchbyftostatecity', ['as'=>'pilotsearchbyftostatecity','uses'=>'FTO\Pilot\PilotsController@getAllPilotForSearchPageAfterSomeStateCityChange']);
	
	Route::get('pilotapprove/{id}/{approvalVal}',['as'=>'pilotapprove','uses'=>'FTO\Pilot\PilotsController@approvePilot']);
	
	Route::get('pilotdisapprove/{id}/{approvalVal}',['as'=>'pilotdisapprove','uses'=>'FTO\Pilot\PilotsController@approvePilot']);
	
	Route::get('ftocourseslist', ['as'=>'ftocourseslist','uses'=>'FTO\Course\CourseController@index']);
	
	Route::any('ftocoursesdatelist', ['as'=>'ftocoursesdatelist','uses'=>'FTO\Course\CourseController@coursesdatelist']);
	
	Route::get('logOut', ['as'=>'logOut','uses'=>'FTO\FTOLoginController@logOut']);
	
	Route::post('savecourse',['as'=>'savecourse','uses'=>'FTO\Course\CourseController@savecourse']);
	
	Route::get('ftoadvertiselist', ['as'=>'ftoadvertiselist','uses'=>'FTO\Advertise\AdvertiseController@index']);
	
	Route::get('ftoregisteredstudentslist', ['as'=>'ftoregisteredstudentslist','uses'=>'FTO\RegisteredStudents\RegisteredStudentsController@index']);
	
	Route::get('ftoprovidestudentcertificatelist', ['as'=>'ftoprovidestudentcertificatelist','uses'=>'FTO\ProvideStudentCertificate\ProvideStudentCertificateController@index']);
	
	Route::get('dnldstdntcertficate/{id}',['as'=>'dnldstdntcertficate','uses'=>'FTO\ProvideStudentCertificate\ProvideStudentCertificateController@createCertificate']);
	
	Route::any('saveftocertificatenumber', ['as'=>'saveftocertificatenumber','uses'=>'FTO\GenerateCertificateNumber\GenerateCertificateNumberController@saveGenerateCertificateNumber']);
	
	Route::get('ftocertificategeneratecodelist', ['as'=>'ftocertificategeneratecodelist','uses'=>'FTO\GenerateCertificateNumber\GenerateCertificateNumberController@index']);
	
	Route::post('saveftoadvertise',['as'=>'saveftoadvertise','uses'=>'FTO\Advertise\AdvertiseController@saveAdvertise']);
	
	Route::get('advertiseshowhidebyfto/{id}/{approvalVal}',['as'=>'advertiseshowhidebyfto','uses'=>'FTO\Advertise\AdvertiseController@approveAdvertise']);
	
	Route::get('ftoeventlist', ['as'=>'ftoeventlist','uses'=>'FTO\Event\EventController@index']);
	
	Route::post('saveftoevent',['as'=>'saveftoevent','uses'=>'FTO\Event\EventController@saveEvent']);
	
	Route::get('eventshowhidebyfto/{id}/{approvalVal}',['as'=>'eventshowhidebyfto','uses'=>'FTO\Event\EventController@approveEvent']);
	
	// News
	Route::get('ftonewslist', ['as'=>'ftonewslist','uses'=>'FTO\News\NewsController@index']);
	
	Route::post('saveftonews',['as'=>'saveftonews','uses'=>'FTO\News\NewsController@saveNews']);
	
	Route::get('newsshowhidebyfto/{id}/{approvalVal}',['as'=>'newsshowhidebyfto','uses'=>'FTO\News\NewsController@approveNews']);
	
	
	// Achievement
	Route::get('ftoachievementlist', ['as'=>'ftoachievementlist','uses'=>'FTO\Achievement\AchievementController@index']);
	
	Route::post('saveftoachievement',['as'=>'saveftoachievement','uses'=>'FTO\Achievement\AchievementController@saveAchievement']);
	
	Route::get('achievementshowhidebyfto/{id}/{approvalVal}',['as'=>'achievementshowhidebyfto','uses'=>'FTO\Achievement\AchievementController@approveAchievement']);

	//Rating 
	//Pilot
	Route::get('pilotsrating', ['as'=>'pilotsrating','uses'=>'FTO\Rating\PilotsController@index']);
	Route::get('ftopilotrating/{id}/{ratingVal}', ['as'=>'ftopilotrating','uses'=>'FTO\Rating\PilotsController@FTOPilotRating']);
	
// 	//Instructor
 	Route::get('instructorrating', ['as'=>'instructorrating','uses'=>'FTO\Rating\FTOInstructorController@index']);
	Route::get('ftoinstructorrating/{id}/{ratingVal}', ['as'=>'ftoinstructorrating','uses'=>'FTO\Rating\FTOInstructorController@ftoInstructorRating']);

	// Blog
	Route::get('ftobloglist', ['as'=>'ftobloglist','uses'=>'FTO\Blog\BlogController@index']);
	
	Route::post('saveftoblog',['as'=>'saveftoblog','uses'=>'FTO\Blog\BlogController@saveBlog']);
	
	Route::get('blogshowhidebyfto/{id}/{approvalVal}',['as'=>'blogshowhidebyfto','uses'=>'FTO\Blog\BlogController@approveBlog']);
	
	// Certificate of Pilot from FTO
	Route::get('pilotcertificate/{id}', ['as'=>'pilotcertificate','uses'=>'FTO\Pilot\CertificateController@index']);
	
	
	// PhotoGallery
	
	Route::get('ftophotolist', ['as'=>'ftophotolist','uses'=>'FTO\PhotoGallery\PhotoGalleryController@index']);
	
	Route::post('saveftophoto',['as'=>'saveftophoto','uses'=>'FTO\PhotoGallery\PhotoGalleryController@savePhotoGallery']);
	
	Route::get('photoshowhidebyfto/{id}/{approvalVal}',['as'=>'photoshowhidebyfto','uses'=>'FTO\PhotoGallery\PhotoGalleryController@approvePhotoGallery']);
	
	// VideoGallery
	
	Route::get('ftovideolist', ['as'=>'ftovideolist','uses'=>'FTO\VideoGallery\VideoGalleryController@index']);
	
	Route::post('saveftovideo',['as'=>'saveftovideo','uses'=>'FTO\VideoGallery\VideoGalleryController@saveVideoGallery']);
	
	Route::get('videoshowhidebyfto/{id}/{approvalVal}',['as'=>'videoshowhidebyfto','uses'=>'FTO\VideoGallery\VideoGalleryController@approveVideoGallery']);
});



Route::group(['middleware'=>['Pilot']],function(){

	Route::any('pilotdroneinfo', ['as'=>'pilotdroneinfo','uses'=>'Pilot\PilotDroneInfo\PilotDroneController@index']);
	
	
	Route::get('dashpilot', ['as'=>'dashpilot','uses'=>'Pilot\Dashboard\DashboardController@index']);
	
	Route::get('ordersList', ['as'=>'ordersList','uses'=>'Pilot\Events\EventsController@index']);
	
	Route::get('advertiselist', ['as'=>'advertiselist','uses'=>'Pilot\Advertise\AdvertiseController@index']);
	
	Route::get('logOutPilot', ['as'=>'logOutPilot','uses'=>'Pilot\PilotLoginController@logOut']);
	
	Route::post('saveadvertise',['as'=>'saveadvertise','uses'=>'Pilot\Advertise\AdvertiseController@saveAdvertise']);
	
	Route::get('advertiseshowhidebypilot/{id}/{approvalVal}',['as'=>'advertiseshowhidebypilot','uses'=>'Pilot\Advertise\AdvertiseController@approveAdvertise']);
	
	Route::get('eventlist', ['as'=>'eventlist','uses'=>'Pilot\Event\EventController@index']);
	
	Route::post('saveevent',['as'=>'saveevent','uses'=>'Pilot\Event\EventController@saveEvent']);
	
	Route::get('eventshowhidebypilot/{id}/{approvalVal}',['as'=>'eventshowhidebypilot','uses'=>'Pilot\Event\EventController@approveEvent']);
	
	// Achievement
	
	Route::get('pilotachievementlist', ['as'=>'pilotachievementlist','uses'=>'Pilot\Achievement\AchievementController@index']);
	
	Route::post('saveachievement',['as'=>'saveachievement','uses'=>'Pilot\Achievement\AchievementController@saveAchievement']);
	
	Route::get('achievementshowhidebypilot/{id}/{approvalVal}',['as'=>'achievementshowhidebypilot','uses'=>'Pilot\Achievement\AchievementController@approveAchievement']);
	
	// Blog
	
	Route::get('pilotbloglist', ['as'=>'pilotbloglist','uses'=>'Pilot\Blog\BlogController@index']);
	
	Route::post('saveblog',['as'=>'saveblog','uses'=>'Pilot\Blog\BlogController@saveBlog']);
	
	Route::get('blogshowhidebypilot/{id}/{approvalVal}',['as'=>'blogshowhidebypilot','uses'=>'Pilot\Blog\BlogController@approveBlog']);
	
	
	// PhotoGallery
	
	Route::get('pilotphotolist', ['as'=>'pilotphotolist','uses'=>'Pilot\PhotoGallery\PhotoGalleryController@index']);
	
	Route::post('savephoto',['as'=>'savephoto','uses'=>'Pilot\PhotoGallery\PhotoGalleryController@savePhotoGallery']);
	
	Route::get('photoshowhidebypilot/{id}/{approvalVal}',['as'=>'photoshowhidebypilot','uses'=>'Pilot\PhotoGallery\PhotoGalleryController@approvePhotoGallery']);
	
	
	// VideoGallery
	
	Route::get('pilotvideolist', ['as'=>'pilotvideolist','uses'=>'Pilot\VideoGallery\VideoGalleryController@index']);
	
	Route::post('savevideo',['as'=>'savevideo','uses'=>'Pilot\VideoGallery\VideoGalleryController@saveVideoGallery']);
	
	Route::get('videoshowhidebypilot/{id}/{approvalVal}',['as'=>'videoshowhidebypilot','uses'=>'Pilot\VideoGallery\VideoGalleryController@approveVideoGallery']);
	
});





// Common Route
Route::post('getcity',['as'=>'getcity','uses'=>'Common\CommonController@getCommonCityByStateId']);
Route::post('getadmincity',['as'=>'getadmincity','uses'=>'Common\CommonController@getAdminCityByStateId']);








// Student Route

Route::get('student', ['as'=>'student','uses'=>'Student\StudentLoginController@loginStudent']);
Route::post('loginstudent', ['as'=>'loginstudent','uses'=>'Student\StudentLoginController@validateStudentLogin']);

Route::get('logoutstudent', ['as'=>'logoutstudent','uses'=>'Student\StudentLoginController@logOut']);
Route::get('dashstudent', ['as'=>'dashstudent','uses'=>'Student\Dashboard\DashboardController@index']);
Route::get('studentcourseslist', ['as'=>'studentcourseslist','uses'=>'Student\Course\CourseController@index']);
Route::get('tpmlist',['as'=>'tpmlist','uses'=>'Student\TPM\TPMController@index']);







// For Service And Sub category
Route::any('servicecategory', ['as'=>'servicecategory','uses'=>'Admin\Master\ServiceCategory\ServiceCategoryController@index']);

	Route::any('subcategory', ['as'=>'subcategory','uses'=>'Admin\Master\SubCategory\SubCategoryController@index']);

//Expert
	Route::any('expertlist', ['as'=>'expertlist','uses'=>'Admin\Expert\ExpertController@index']);


//Do's and Don'ts
Route::get('do', function () {
    return view('website.dodont');
});
//Certificate A4 Page
Route::get('certificate', function () {
    return view('website.certificateformate');
});

//TPM
Route::get('ftotpmlist',['as'=>'ftotpmlist','uses'=>'FTO\TPM\TPMController@index']);
Route::post('saveftotpm',['as'=>'saveftotpm','uses'=>'FTO\TPM\TPMController@saveTPM']);
Route::get('tpmshowhidebyfto/{id}/{approvalVal}',['as'=>'tpmshowhidebyfto','uses'=>'FTO\TPM\TPMController@approveTPM']);

//Terms And Conditions
Route::get('terms', function(){
    return View('website.termsandconditions'); //  Blade template name
});


//Certificate
Route::get('certificatenumber', ['as'=>'certificate','uses'=>'FTO\StudentCertificate\CertificateController@index']);



//Bond content
Route::get('bondcontent',['as'=>'bondcontent','uses'=>'FTO\IndemnityContent\ContentController@index']);
Route::any('contentsave', ['as'=>'contentsave','uses'=>'FTO\IndemnityContent\ContentController@contentSave']);

// For carrier
Route::get('carrier', ['as'=>'carrier','uses'=>'Website\Carrier\CarrierController@index']);

Route::post('carriersave', ['as'=>'carriersave','uses'=>'Website\Carrier\CarrierController@carrierSave']);



//droneapplication
Route::get('droneapplication', function(){
    return View('website.droneapplication'); //  Blade template name
});

//Studentreg

Route::any('studentregistration',['as'=>'studentregistration','uses'=>'Website\StudentRegistration\StudentRegistrationController@index']);

Route::any('savestudentregforms',['as'=>'savestudentregforms','uses'=>'Website\StudentRegistration\StudentRegistrationController@saveRegForms']);

Route::post('studentotpverified', ['as'=>'studentotpverified','uses'=>'Website\StudentRegistration\StudentRegistrationController@studentotpverified']);