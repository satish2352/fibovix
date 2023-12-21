<?php
namespace App\Http\Repository\Admin\Testimonials;
use App\Model\Admin\Testimonials;
use DB;
class TestimonialsRepository
{
    public function getAllTestimonialsList($id)
    {
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition=" ";
    		
    	}
    	
    		return DB::Select("SELECT `id`, `whosetestimonials`, `testimonialsBy`, `title`, `content`, `createdOn`, `image`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `testimonials` ".$dateCondition." ");
    }
    
    
    public function savetestimonialsForm($testimonialsdata)
    {
    	return Testimonials::insert($testimonialsdata);
    }
    
    
    
    
    public function approveTestimonials($id,$data)
    {
        $result =DB::table('testimonials')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    public function approveTestimonialsbyadmin($id,$data)
    {
        $result =DB::table('testimonials')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}