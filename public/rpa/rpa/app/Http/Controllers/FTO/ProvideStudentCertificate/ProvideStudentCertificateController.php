<?php
namespace App\Http\Controllers\FTO\ProvideStudentCertificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\ProvideStudentCertificate\ProvideStudentCertificateService;
use App\Http\Controllers\Common\CommonController;
use Session;
use PDF;

class ProvideStudentCertificateController extends Controller
{
   public function __construct()
	{
		$this->service=new ProvideStudentCertificateService();
		$this->serviceNew=new CommonController();
	}
   public function index()
   {
        $allProvideStudentCertificate=$this->service->getAllProvideStudentCertificateList('');
        $CategoryList=$this->serviceNew->getCategoryList('');
        $DurationList=$this->serviceNew->getDurationList('');
        $statesofAdminList=$this->serviceNew->getAllAdminState('');
        return view('fto.providestudentcertificate.providestudentcertificate', compact('allProvideStudentCertificate','CategoryList','DurationList','statesofAdminList'));
   }
   
   public function createCertificate($id)
   {
       $fontsFolder=storage_path()."/fonts";
        if ( !is_dir( $fontsFolder) ) 
        {
          mkdir( $fontsFolder );       
        }
       $allCertificateInfo=$this->service->getstudentrecord($id);
       //dd($allCertificateInfo);
       $pdfName=$allCertificateInfo[0]->firstName." ".$allCertificateInfo[0]->middleName." ".$allCertificateInfo[0]->lastName;

       // return view('fto.providestudentcertificate.readycertificate', compact('allCertificateInfo'));
       $pdf = PDF::loadView('fto.providestudentcertificate.readycertificate', compact('allCertificateInfo'))->setPaper('a4', 'landscape');
       return $pdf->download($pdfName.'.pdf');
   }
   
}