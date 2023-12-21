<?php
namespace App\Http\Service\Admin\DroneNewsFeed;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\DroneNewsFeed\DroneNewsFeedRepository;
use session;
class DroneNewsFeedService
{
    public function __construct()
    {
    	$this->repository=new DroneNewsFeedRepository();
    }
    
    public function getAllDroneNewsFeedList($id)
    {
        $allDroneNewsFeed=$this->repository->getAllDroneNewsFeedList($id);
        return $allDroneNewsFeed;
    }
    
    
    
    
    
    
    public function saveDroneNewsFeedForm($req)
    {
        $cDate = date('d F Y');
            $DroneNewsFeeddata=array(
            'whoseDroneNewsFeed'=>session()->get('adminId'),
            'DroneNewsFeedBy'=>2,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'title'=>$req->title,
            'description'=>$req->description,
            'url'=>$req->vdId,
            'uploadedOn'=>$cDate,
            'status'=>1,
            'adminStatus'=>1
            );
            
            
           $dataOfDroneNewsFeed=$this->repository->saveDroneNewsFeedForm($DroneNewsFeeddata);
    }
    
    
    
    
    
    
    
    
    
    public function approveDroneNewsFeed($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allDroneNewsFeed=$this->repository->approveDroneNewsFeed($id,$data);
        return $allDroneNewsFeed;
    }
    
    
    public function approveDroneNewsFeedbyadmin($id,$setApproval)
    {
        $data=array(
                'adminStatus'=>$setApproval
            );
        $allDroneNewsFeed=$this->repository->approveDroneNewsFeedbyadmin($id,$data);
        return $allDroneNewsFeed;
    }
    
    
    
    
    
}