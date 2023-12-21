<?php
namespace App\Http\Service\Admin\Advertise;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\Advertise\AdvertiseRepository;
use session;
class AdvertiseService
{
    public function __construct()
    {
    	$this->repository=new AdvertiseRepository();
    }
    
    public function getAllAdvertiseList($id)
    {
        $allAdvertise=$this->repository->getAllAdvertiseList($id);
        return $allAdvertise;
    }
    
    
    
    
    
    
    public function saveAdvertiseForm($req)
    {
        // Course Image Code
        $AdvertiseImage=public_path()."/asset/Advertise/Image";
          if ( !is_dir( $AdvertiseImage) ) 
          {
            mkdir( $AdvertiseImage );       
          }
          
          if (!empty($req->image))
          {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move($AdvertiseImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
            
            $advertisedata=array(
            'whoadvertising'=>session()->get('adminId'),
            'title'=>$req->adsTitle,
            'content'=>$req->adsContent,
            'advertiseBy'=>2,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'image'=>$imageName,
            'fromDate'=>$req->fromDate,
            'toDate'=>$req->toDate,
            'status'=>1,
            'adminStatus'=>1
            );
            
            
           $dataOfadvertise=$this->repository->saveadvertiseForm($advertisedata);
    }
    
    
    
    
    
    
    
    
    
    public function approveAdvertise($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allAdvertise=$this->repository->approveAdvertise($id,$data);
        return $allAdvertise;
    }
    
    
    public function approveAdvertisebyadmin($id,$setApproval)
    {
        $data=array(
                'adminStatus'=>$setApproval
            );
        $allAdvertise=$this->repository->approveAdvertisebyadmin($id,$data);
        return $allAdvertise;
    }
    
    
    
    
    
}