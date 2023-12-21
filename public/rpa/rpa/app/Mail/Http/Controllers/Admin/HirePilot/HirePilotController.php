<?php
namespace App\Http\Controllers\Admin\HirePilot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\HirePilot\HirePilotService;
class HirePilotController extends Controller
{
   public function __construct()
	{
		$this->service=new HirePilotService();
	}
	
   public function index()
   {
        $hirePilotList=$this->service->getHirePilotList();
   		return view('admin.hirepilot.hirepilot',compact('hirePilotList'));
   }

}