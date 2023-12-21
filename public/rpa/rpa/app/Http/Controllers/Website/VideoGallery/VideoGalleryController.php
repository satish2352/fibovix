<?php
namespace App\Http\Controllers\Website\VideoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\VideoGallery\VideoGalleryService;
use Session;
class VideoGalleryController extends Controller
{
   public function __construct()
	{
		$this->service=new VideoGalleryService();
	}
   
   public function getAllVideoGalleryList()
   {
        $allVideoGalleryList=$this->service->getVideoGalleryList();
        return view('website.videogallery.videogallery', compact('allVideoGalleryList'));
   }
}