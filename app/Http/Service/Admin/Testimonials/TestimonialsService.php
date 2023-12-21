<?php
namespace App\Http\Service\Admin\Testimonials;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\Testimonials\TestimonialsRepository;
use session;
use DB;
class TestimonialsService
{
    public function __construct()
    {
    	$this->repository=new TestimonialsRepository();
    }
    
    public function getAllTestimonialsList($id)
    {
        $allTestimonials=$this->repository->getAllTestimonialsList($id);
        return $allTestimonials;
    }
    
    
    public function getAllTestimonialsListAll()
    {
        $allTestimonials=DB::select(DB::raw(" select * from testimonials "));
        return $allTestimonials;
    }
    
    
    
    
    
    
    public function saveTestimonialsForm($req)
    {
        // Course Image Code
        $TestimonialsImage=public_path()."/asset/Testimonials/Image";
          if ( !is_dir( $TestimonialsImage) ) 
          {
            mkdir( $TestimonialsImage );       
          }
          
          if (!empty($req->image))
          {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move($TestimonialsImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
            $cDate = date('d F Y');
            $testimonialsdata=array(
            'whosetestimonials'=>session()->get('adminId'),
            'title'=>$req->adsTitle,
            'content'=>$req->adsContent,
            'testimonialsBy'=>2,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'image'=>$imageName,
            'createdOn'=>$cDate,
            'status'=>1,
            'adminStatus'=>1
            );
            
            
           $dataOftestimonials=$this->repository->savetestimonialsForm($testimonialsdata);
    }
    
    
    
    
    
    
    
    
    
    public function approveTestimonials($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allTestimonials=$this->repository->approveTestimonials($id,$data);
        return $allTestimonials;
    }
    
    
    public function approveTestimonialsbyadmin($id,$setApproval)
    {
        $data=array(
                'adminStatus'=>$setApproval
            );
        $allTestimonials=$this->repository->approveTestimonialsbyadmin($id,$data);
        return $allTestimonials;
    }
    
    
    
    
    
}