<?php
namespace App\Http\Controllers\Website\AdvisoryBoard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\AdvisoryBoard\AdvisoryBoardService;
use Session;
class AdvisoryBoardController extends Controller
{
   public function __construct()
	{
		$this->service=new AdvisoryBoardService();
	}
   
   public function getAllAdvisoryBoardList()
   {
        $allAdvisoryBoardList=$this->service->getAllAdvisoryBoardList();
        return view('website.advisoryboard', compact('allAdvisoryBoardList'));
   }
}