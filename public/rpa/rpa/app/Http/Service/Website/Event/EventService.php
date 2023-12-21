<?php
namespace App\Http\Service\Website\Event;
use Illuminate\Http\Request;
use App\Http\Repository\Website\Event\EventRepository;
use session;
class EventService
{
    public function __construct()
    {
    	$this->repository=new EventRepository();
    }
    
    public function getAllEventList()
    {
        $allEventList=$this->repository->getAllEventList();
        return $allEventList;
    }
    
    
    public function eventDetails($id)
    {
        $eventDetails=$this->repository->eventDetails($id);
        return $eventDetails;
    }
    
    
}