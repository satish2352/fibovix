<?php
namespace App\Http\Controllers\FTO\TPM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\TPM\TPMService;
class TPMController extends Controller
{
   public function __construct()
	{
		$this->service=new TPMService();
	}
	
   public function index()
   {
       $allTPM=$this->service->getAllTPMList('');
   		return view('fto.tpm.tpm',compact('allTPM'));
   }
   
   
    public function saveTPM(Request $req)
      {
      		$allTPM=$this->service->saveTPMForm($req);
      		return redirect('ftotpmlist');
      }
      
      
      
      
      public function approveTPM($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveTPM($id,$setApproval);
            return redirect('ftotpmlist');
        }
   
}