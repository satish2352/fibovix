<?php
namespace App\Http\Repository\Website\PhotoGallery;
use App\Model\Website\PhotoGallery;
use DB;
class PhotoGalleryRepository
{
    public function getPhotoGalleryList()
    {
        $result = DB::select("SELECT `id`, `whosePhotoGallery`, `PhotoGalleryBy`, `image`,`title`, `status`, `uploadedOn`, `adminStatus`, `createdAt`, `updatedAt` FROM `photogallery` where PhotoGalleryBy='2' ");

        return $result;
        
    }
}