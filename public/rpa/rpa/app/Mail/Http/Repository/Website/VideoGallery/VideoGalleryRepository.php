<?php
namespace App\Http\Repository\Website\VideoGallery;
use App\Model\Website\VideoGallery;
use DB;
class VideoGalleryRepository
{
    public function getVideoGalleryList()
    {
        $result = DB::select("SELECT `id`, `whoseVideoGallery`, `VideoGalleryBy`, `url`, `status`, `uploadedOn`, `adminStatus`, `createdAt`, `updatedAt` FROM `videogallery`");

        return $result;
        
    }
}