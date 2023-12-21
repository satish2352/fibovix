<?php
namespace App\Http\Repository\Pilot\PhotoGallery;
use App\Model\Pilot\PhotoGallery;
use DB;
class PhotoGalleryRepository
{
    public function getAllPhotoGalleryList($id)
    {
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition="WHERE `whosePhotoGallery`='".session()->get('pilotId')."' and `PhotoGalleryBy`='0' ";
    	}
    	
    		return DB::Select("SELECT `id`, `whosePhotoGallery`, `PhotoGalleryBy`, `image`, `status`, `uploadedOn`, `adminStatus`, `createdAt`, `updatedAt` FROM `photogallery` ".$dateCondition." ");
    }
    
    
    public function savephotogalleryForm($data)
    {
    	return PhotoGallery::insert($data);
    }
    
    
    
    
    public function approvePhotoGallery($id,$data)
    {
        $result =DB::table('photogallery')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}