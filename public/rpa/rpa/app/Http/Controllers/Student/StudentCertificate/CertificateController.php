<?php
namespace App\Http\Controllers\FTO\StudentCertificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\StudentCertificate\CertificateService;
use App\Http\Controllers\Common\CommonController;
use Session;
class CertificateController extends Controller
{
   public function __construct()
	{
		$this->service=new CertificateService();
		$this->serviceNew = new CommonController();
	}

   public function index()
   {
      return view('fto.studentcertificate.certificate');
   }
     
   public function contentSave(Request $req)
   {
        $result=$this->service->contentSave($req);
        return redirect('certificate')->with('status','Information Submitted Sucessfully');
        
   }

}