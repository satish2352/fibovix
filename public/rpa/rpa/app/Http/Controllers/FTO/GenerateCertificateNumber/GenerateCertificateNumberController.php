<?php
namespace App\Http\Controllers\FTO\GenerateCertificateNumber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\GenerateCertificateNumber\GenerateCertificateNumberService;
//use App\Http\Controllers\Common\CommonController;
use Session;

class GenerateCertificateNumberController extends Controller
{
   public function __construct()
	{
		$this->service=new GenerateCertificateNumberService();
		//$this->serviceNew=new CommonController();
	}
   public function index()
   {
        $allGenerateCertificateNumber=$this->service->getAllGenerateCertificateNumberList('');
        // $CategoryList=$this->serviceNew->getCategoryList('');
        // $DurationList=$this->serviceNew->getDurationList('');
        // $statesofAdminList=$this->serviceNew->getAllAdminState('');
        return view('fto.generatecertificatenumber.generatecertificatenumber', compact('allGenerateCertificateNumber'));
   }
   
   
   
   public function saveGenerateCertificateNumber(Request $req)
      {
      		$allGenerateCertificateNumber=$this->service->saveGenerateCertificateNumberForm($req);
      		return redirect('ftocertificategeneratecodelist');
      }
      
      
      
   
}