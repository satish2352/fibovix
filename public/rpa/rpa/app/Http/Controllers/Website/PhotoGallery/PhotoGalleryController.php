<?php
namespace App\Http\Controllers\Website\PhotoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\PhotoGallery\PhotoGalleryService;
use Session;
class PhotoGalleryController extends Controller
{
   public function __construct()
	{
		$this->service=new PhotoGalleryService();
	}
   
   public function getAllPhotoGalleryList()
   {
        $allPhotoGalleryList=$this->service->getPhotoGalleryList();
        return view('website.photogallery.photogallery', compact('allPhotoGalleryList'));
   }
}