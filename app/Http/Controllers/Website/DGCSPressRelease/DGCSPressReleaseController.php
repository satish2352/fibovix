<?php
namespace App\Http\Controllers\Website\DGCSPressRelease;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\DGCSPressRelease\DGCSPressReleaseService;
use Session;
class DGCSPressReleaseController extends Controller
{
   public function __construct()
	{
		$this->service=new DGCSPressReleaseService();
	}
   
   public function index()
   {
        $allDGCSPressReleaseList=$this->service->getDGCSPressReleaseList();
        return view('website.DGCSPressRelease', compact('allDGCSPressReleaseList'));
   }
}