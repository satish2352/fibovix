<?php
namespace App\Http\Repository\Website\Testimonials;
use App\Model\Website\Testimonials;
use DB;
class TestimonialsRepository
{
    public function getAllTestimonialsList()
    {
        $result = DB::select("SELECT `id`, `whosetestimonials`, `testimonialsBy`, `title`, `content`, `image`, `status`, `createdOn`, `adminStatus`, `createdAt`, `updatedAt` FROM `testimonials`");
       
        return $result;
        
    }
}