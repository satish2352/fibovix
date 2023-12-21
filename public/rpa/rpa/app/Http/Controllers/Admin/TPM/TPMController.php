<?php
namespace App\Http\Controllers\Admin\TPM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\TPM\TPMService;
class TPMController extends Controller
{
   public function __construct()
	{
		$this->service=new TPMService();
	}
	
   public function index()
   {
       $allTPM=$this->service->getAllTPMList('');
   		return view('admin.tpm.tpm',compact('allTPM'));
   }
   
   
    public function saveTPM(Request $req)
      {
      		$allTPM=$this->service->saveTPMForm($req);
      		return redirect('admintpmlist');
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
            return redirect('admintpmlist');
        }
        
        
        
        public function approveTPMbyadmin($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveTPMbyadmin($id,$setApproval);
            return redirect('admintpmlist');
        }
   
}