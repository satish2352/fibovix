<?php
namespace App\Http\Repository\Website\Event;
use App\Model\Website\Event;
use DB;
class EventRepository
{
    public function getAllEventList()
    {
        $result = DB::select("SELECT `id`, `whoeventing`, `eventBy`, `title`, `content`, `image`, `fromDate`, `toDate`, `fromTime`, `toTime`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `events`");

        return $result;
        
    }
    
    
    
    public function eventDetails($id)
    {
        return DB::Select("SELECT `id`, `whoeventing`, `eventBy`, `title`, `content`, `image`, `fromDate`, `toDate`, `fromTime`, `toTime`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `events` where id=$id ");
    }
}