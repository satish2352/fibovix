<?php
namespace App\Http\Service\Pilot\VideoGallery;
use Illuminate\Http\Request;
use App\Http\Repository\Pilot\VideoGallery\VideoGalleryRepository;
use session;
class VideoGalleryService
{
    public function __construct()
    {
    	$this->repository=new VideoGalleryRepository();
    }
    
    public function getAllVideoGalleryList($id)
    {
        $allVideoGallery=$this->repository->getAllVideoGalleryList($id);
        return $allVideoGallery;
    }
    
    
    
    
    
    
    public function saveVideoGalleryForm($req)
    {
            $cDate = date('d F Y');
            $VideoGallerydata=array(
            'whoseVideoGallery'=>session()->get('pilotId'),
            'VideoGalleryBy'=>0,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'url'=>$req->vdId,
            'title'=>$req->title,
            'status'=>1,
            'uploadedOn'=>$cDate,
            'adminStatus'=>0
            );
            
           $dataOfVideoGallery=$this->repository->savevideogalleryForm($VideoGallerydata);
    }
    
    
    
    
    
    
    
    
    
    public function approveVideoGallery($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allVideoGallery=$this->repository->approveVideoGallery($id,$data);
        return $allVideoGallery;
    }
    
    
    
    
    
}