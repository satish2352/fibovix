<?php
namespace App\Http\Controllers\FTO\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\Event\EventService;
class EventController extends Controller
{
   public function __construct()
	{
		$this->service=new EventService();
	}
	
   public function index()
   {
       $allEvent=$this->service->getAllEventList('');
   		return view('fto.event.event',compact('allEvent'));
   }
   
   
    public function saveEvent(Request $req)
      {
      		$allEvent=$this->service->saveEventForm($req);
      		return redirect('ftoeventlist');
      }
      
      
      
      
      public function approveEvent($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveEvent($id,$setApproval);
            return redirect('ftoeventlist');
        }
   
}