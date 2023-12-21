<?php
namespace App\Http\Controllers\FTO\Pilot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\Pilots\CertificateService;
use App\Http\Controllers\Common\CommonController;
use Session;
class CertificateController extends Controller
{
   public function __construct()
	{
		$this->service=new CertificateService();
		$this->serviceNew = new CommonController();
	}
	
   public function index($id)
   {
        $getCertificate=$this->service->getCertificate($id);
        return view('fto.certificate.certificate', compact('getCertificate'));
   }
   
   
   
}