<?php
namespace App\Http\Controllers\Admin\Testimonials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Testimonials\TestimonialsService;
class TestimonialsController extends Controller
{
   public function __construct()
	{
		$this->service=new TestimonialsService();
	}
	
   public function index()
   {
       $allTestimonials=$this->service->getAllTestimonialsList('');
   		return view('admin.testimonials.testimonials',compact('allTestimonials'));
   }
   
   
    public function saveTestimonials(Request $req)
      {
      		$allTestimonials=$this->service->saveTestimonialsForm($req);
      		return redirect('admintestimonialslist');
      }
      
      
      
      
      public function approveTestimonials($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveTestimonials($id,$setApproval);
            return redirect('admintestimonialslist');
        }
        
        
        
        public function approveTestimonialsbyadmin($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveTestimonialsbyadmin($id,$setApproval);
            return redirect('admintestimonialslist');
        }
   
}