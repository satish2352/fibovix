<?php
namespace App\Http\Controllers\Admin\DGCAPressRelease;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\DGCAPressRelease\DGCAPressReleaseService;
class DGCAPressReleaseController extends Controller
{
   public function __construct()
	{
		$this->service=new DGCAPressReleaseService();
	}
	
   public function index()
   {
       $allDGCAPressRelease=$this->service->getAllDGCAPressReleaseList('');
   		return view('admin.DGCAPressRelease.DGCAPressRelease',compact('allDGCAPressRelease'));
   }
   
   
    public function saveDGCAPressRelease(Request $req)
      {
      		$allDGCAPressRelease=$this->service->saveDGCAPressReleaseForm($req);
      		return redirect('adminDGCAPressReleaselist');
      }
      
      
      
      
      public function approveDGCAPressRelease($id,$approvalVal)
        {
            dd($id);
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveDGCAPressRelease($id,$setApproval);
            return redirect('adminDGCAPressReleaselist');
        }
        
        
        
        public function approveDGCAPressReleasebyadmin($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveDGCAPressReleasebyadmin($id,$setApproval);
            return redirect('adminDGCAPressReleaselist');
        }
   
}