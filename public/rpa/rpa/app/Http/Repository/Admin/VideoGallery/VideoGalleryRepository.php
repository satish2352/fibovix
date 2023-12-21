<?php
namespace App\Http\Repository\Admin\VideoGallery;
use App\Model\Admin\VideoGallery;
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
    		$dateCondition=" ";
    		
    	}
    	
    		return DB::Select("SELECT `id`, `whoseVideoGallery`, `VideoGalleryBy`, `title`, `url`, `status`, `uploadedOn`, `adminStatus`, `createdAt`, `updatedAt` FROM `videogallery` ".$dateCondition." ");
    }
    
    
    public function savevideogalleryForm($videogallerydata)
    {
    	return VideoGallery::insert($videogallerydata);
    }
    
    
    
    
    public function approveVideoGallery($id,$data)
    {
        $result =DB::table('videogallery')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    public function approveVideoGallerybyadmin($id,$data)
    {
        $result =DB::table('videogallery')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}