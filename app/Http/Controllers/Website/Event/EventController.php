<?php
namespace App\Http\Controllers\Website\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\Event\EventService;
use Session;
class EventController extends Controller
{
   public function __construct()
	{
		$this->service=new EventService();
	}
   
   public function getAllEventList()
   {
        $allEventList=$this->service->getAllEventList();
        return view('website.event.eventsearch', compact('allEventList'));
   }
   
   public function eventDetails($id)
    {
        $eventDetails=$this->service->eventDetails($id);
        return view('website.event.eventdetail', compact('eventDetails'));
    }
        
}