<?php
namespace App\Http\Repository\Pilot\VideoGallery;
use App\Model\Pilot\VideoGallery;
use DB;
class VideoGalleryRepository
{
    public function getAllVideoGalleryList($id)
    {
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition="WHERE `whoseVideoGallery`='".session()->get('pilotId')."' and `VideoGalleryBy`='0' ";
    	}
    	
    		return DB::Select("SELECT `id`, `whoseVideoGallery`, `VideoGalleryBy`, `url`, `status`, `uploadedOn`, `adminStatus`, `createdAt`, `updatedAt` FROM `videogallery` ".$dateCondition." ");
    }
    
    
    public function savevideogalleryForm($data)
    {
    	return VideoGallery::insert($data);
    }
    
    
    
    
    public function approveVideoGallery($id,$data)
    {
        $result =DB::table('videogallery')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}