<?php
namespace App\Http\Repository\Website\PhotoGallery;
use App\Model\Website\PhotoGallery;
use DB;
class PhotoGalleryRepository
{
    public function getPhotoGalleryList()
    {
        $result = DB::select("SELECT `id`, `whosePhotoGallery`, `PhotoGalleryBy`, `image`, `status`, `uploadedOn`, `adminStatus`, `createdAt`, `updatedAt` FROM `photogallery`");

        return $result;
        
    }
}