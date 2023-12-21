<?php
namespace App\Http\Controllers\Student\TPM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Student\TPM\TPMService;
use App\Http\Controllers\Common\CommonController;

use Session;
class TPMController extends Controller
{
   public function __construct()
	{
		$this->service=new TPMService();
		$this->serviceNew=new CommonController();
	}
   public function index()
   {
        $allTPM=$this->service->getAllTPMList('');
        
        return view('student.tpm.tpm', compact('allTPM'));
   }
   
}