<?php
namespace App\Http\Service\FTO\VideoGallery;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\VideoGallery\VideoGalleryRepository;
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
            'whoseVideoGallery'=>session()->get('ftoId'),
            'VideoGalleryBy'=>1,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'url'=>$req->vdId,
            'uploadedOn'=>$cDate,
            'status'=>1,
            'adminStatus'=>0
            );
            
            
           $dataOfvideogallery=$this->repository->savevideogalleryForm($VideoGallerydata);
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