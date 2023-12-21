<?php
namespace App\Http\Service\Website\DroneNewsFeed;
use Illuminate\Http\Request;
use App\Http\Repository\Website\DroneNewsFeed\DroneNewsFeedRepository;
use session;
class DroneNewsFeedService
{
    public function __construct()
    {
    	$this->repository=new DroneNewsFeedRepository();
    }
    
    public function getDroneNewsFeedList()
    {
        $allDroneNewsFeedList=$this->repository->getDroneNewsFeedList();
        return $allDroneNewsFeedList;
    }
}