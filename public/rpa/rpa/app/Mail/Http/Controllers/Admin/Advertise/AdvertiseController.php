<?php
namespace App\Http\Controllers\Admin\Advertise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Advertise\AdvertiseService;
class AdvertiseController extends Controller
{
   public function __construct()
	{
		$this->service=new AdvertiseService();
	}
	
   public function index()
   {
       $allAdvertise=$this->service->getAllAdvertiseList('');
   		return view('admin.advertise.advertise',compact('allAdvertise'));
   }
   
   
    public function saveAdvertise(Request $req)
      {
      		$allAdvertise=$this->service->saveAdvertiseForm($req);
      		return redirect('adminadvertiselist');
      }
      
      
      
      
      public function approveAdvertise($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveAdvertise($id,$setApproval);
            return redirect('adminadvertiselist');
        }
        
        
        
        public function approveAdvertisebyadmin($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveAdvertisebyadmin($id,$setApproval);
            return redirect('adminadvertiselist');
        }
   
}