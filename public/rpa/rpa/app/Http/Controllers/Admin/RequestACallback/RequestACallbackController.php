<?php
namespace App\Http\Controllers\Admin\RequestACallback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\RequestACallback\RequestACallbackService;
class RequestACallbackController extends Controller
{
   public function __construct()
	{
		$this->service=new RequestACallbackService();
	}
	
   public function index()
   {
        $requestACallbackList=$this->service->getRequestACallbackList();
   		return view('admin.requestacallback.requestacallback',compact('requestACallbackList'));
   }

}