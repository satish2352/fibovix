<?php
namespace App\Http\Controllers\Website\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\Footer\RequestcallbackService;
use App\Http\Controllers\Common\CommonController;
use Session;
class RequestcallbackController extends Controller
{
  public function __construct()
	{
		$this->service=new RequestcallbackService();
		$this->serviceNew = new CommonController();
	}
  
   
   public function requestacallBack()
    {
       return view('website.requestacallback');
    }
   
   
   public function requestacallbacksave(Request $req)
      {
      	$sentOtp=$this->service->requestacallbacksave($req);
      	return view('website.requestacallBackverifyotp',compact('sentOtp'));
      }
      
      public function requestacallBackotpverified(Request $req)
      {
          $otp=$req->otp;
          $sentOtp=$this->service->requestacallBackotpverified($otp);
      	  return redirect('requestcallback');
      }
      
   
   
   
}