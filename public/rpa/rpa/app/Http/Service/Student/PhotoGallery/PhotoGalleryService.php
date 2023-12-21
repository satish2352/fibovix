<?php
namespace App\Http\Service\FTO\PhotoGallery;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\PhotoGallery\PhotoGalleryRepository;
use session;
class PhotoGalleryService
{
    public function __construct()
    {
    	$this->repository=new PhotoGalleryRepository();
    }
    
    public function getAllPhotoGalleryList($id)
    {
        $allPhotoGallery=$this->repository->getAllPhotoGalleryList($id);
        return $allPhotoGallery;
    }
    
    
    
    
    
    
    public function savePhotoGalleryForm($req)
    {
       
        $PhotoGalleryImage=public_path()."/asset/PhotoGallery/Image";
          if ( !is_dir( $PhotoGalleryImage) ) 
          {
            mkdir( $PhotoGalleryImage );       
          }
          
          if (!empty($req->image))
          {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move($PhotoGalleryImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
            $cDate = date('d F Y');
            $PhotoGallerydata=array(
            'whosePhotoGallery'=>session()->get('ftoId'),
            'PhotoGalleryBy'=>1,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'image'=>$imageName,
            'uploadedOn'=>$cDate,
            'status'=>1,
            'adminStatus'=>0
            );
            
            
           $dataOfphotogallery=$this->repository->savephotogalleryForm($PhotoGallerydata);
    }
    
    
    
    
    
    
    
    
    
    public function approvePhotoGallery($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allPhotoGallery=$this->repository->approvePhotoGallery($id,$data);
        return $allPhotoGallery;
    }
    
    
    
    
    
}