<?php
namespace App\Http\Service\Website\VideoGallery;
use Illuminate\Http\Request;
use App\Http\Repository\Website\VideoGallery\VideoGalleryRepository;
use session;
class VideoGalleryService
{
    public function __construct()
    {
    	$this->repository=new VideoGalleryRepository();
    }
    
    public function getVideoGalleryList()
    {
        $allVideoGalleryList=$this->repository->getVideoGalleryList();
        return $allVideoGalleryList;
    }
}