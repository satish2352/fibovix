<?php
namespace App\Http\Service\Admin\Event;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\Event\EventRepository;
use session;
class EventService
{
    public function __construct()
    {
    	$this->repository=new EventRepository();
    }
    
    public function getAllEventList($id)
    {
        $allEvent=$this->repository->getAllEventList($id);
        return $allEvent;
    }
    
    
    
    
    
    
    public function saveEventForm($req)
    {
        // Course Image Code
        $EventImage=public_path()."/asset/Event/Image";
          if ( !is_dir( $EventImage) ) 
          {
            mkdir( $EventImage );       
          }
          
          if (!empty($req->image))
          {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move($EventImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
            
            $eventdata=array(
            'whoeventing'=>session()->get('adminId'),
            'title'=>$req->adsTitle,
            'content'=>$req->adsContent,
            'eventBy'=>2,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'image'=>$imageName,
            'fromDate'=>$req->fromDate,
            'toDate'=>$req->toDate,
            'status'=>1,
            'adminStatus'=>1
            );
            
            
           $dataOfevent=$this->repository->saveeventForm($eventdata);
    }
    
    
    
    
    
    
    
    
    
    public function approveEvent($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allEvent=$this->repository->approveEvent($id,$data);
        return $allEvent;
    }
    
    
    public function approveEventbyadmin($id,$setApproval)
    {
        $data=array(
                'adminStatus'=>$setApproval
            );
        $allEvent=$this->repository->approveEventbyadmin($id,$data);
        return $allEvent;
    }
    
    
    
    
    
}