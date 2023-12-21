<?php
namespace App\Http\Controllers\Website\DroneNewsFeed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\DroneNewsFeed\DroneNewsFeedService;
use Session;
class DroneNewsFeedController extends Controller
{
   public function __construct()
	{
		$this->service=new DroneNewsFeedService();
	}
   
   public function index()
   {
        $allDroneNewsFeedList=$this->service->getDroneNewsFeedList();
        return view('website.DroneNewsFeed', compact('allDroneNewsFeedList'));
   }
}