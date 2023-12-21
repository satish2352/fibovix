<?php
namespace App\Http\Service\Website\PhotoGallery;
use Illuminate\Http\Request;
use App\Http\Repository\Website\PhotoGallery\PhotoGalleryRepository;
use session;
class PhotoGalleryService
{
    public function __construct()
    {
    	$this->repository=new PhotoGalleryRepository();
    }
    
    public function getPhotoGalleryList()
    {
        $allPhotoGalleryList=$this->repository->getPhotoGalleryList();
        return $allPhotoGalleryList;
    }
}