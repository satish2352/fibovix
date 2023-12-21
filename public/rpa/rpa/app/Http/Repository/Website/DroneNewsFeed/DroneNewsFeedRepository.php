<?php
namespace App\Http\Repository\Website\DroneNewsFeed;
use App\Model\Website\DroneNewsFeed;
use DB;
class DroneNewsFeedRepository
{
    public function getDroneNewsFeedList()
    {
        $result = DB::select("SELECT `id`, `title`, `whoseDroneNewsFeed`, `DroneNewsFeedBy`, `url`, `description`, `status`, `uploadedOn`, `adminStatus`, `createdAt`, `updatedAt` FROM `DroneNewsFeed` WHERE `status`='1' && `adminStatus`='1'");

        return $result;
    }
}