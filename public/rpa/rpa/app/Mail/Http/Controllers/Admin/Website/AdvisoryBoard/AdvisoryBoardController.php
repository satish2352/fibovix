<?php
namespace App\Http\Controllers\Admin\Website\AdvisoryBoard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Website\AdvisoryBoard\AdvisoryBoardService;
class AdvisoryBoardController extends Controller
{
   public function __construct()
	{
		$this->service=new AdvisoryBoardService();
	}
	
   public function index()
   {
       $allAdvisoryBoard=$this->service->getAllAdvisoryBoardList('');
   		return view('admin.website.advisoryboard',compact('allAdvisoryBoard'));
   }
   
   
    public function saveAdvisoryBoard(Request $req)
      {
      		$allAdvisoryBoard=$this->service->saveAdvisoryBoardForm($req);
      		return redirect('advisoryboardlist');
      }
      
      
      
      
      public function approveAdvisoryBoard($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveAdvisoryBoard($id,$setApproval);
            return redirect('advisoryboardlist');
        }
        
        
        
        public function approveAdvisoryBoardbyadmin($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveAdvisoryBoardbyadmin($id,$setApproval);
            return redirect('advisoryboardlist');
        }
   
}