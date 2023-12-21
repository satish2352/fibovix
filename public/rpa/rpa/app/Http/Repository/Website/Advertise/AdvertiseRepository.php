<?php
namespace App\Http\Repository\Website\Advertise;
use App\Model\Website\Advertise;
use DB;
class AdvertiseRepository
{
    public function getAllAdvertiseList()
    {
        $result = DB::select("SELECT `id`, `whoadvertising`, `advertiseBy`, `title`, `content`, `image`, `fromDate`, `toDate`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `advertise`");
       
        return $result;
        
    }
    
    public function getAllTestimonialsList()
    {
        $result = DB::select("SELECT `id`, `whosetestimonials`, `testimonialsBy`, `title`, `content`, `image`, `status`, `createdOn`, `adminStatus`, `createdAt`, `updatedAt` FROM `testimonials`");
       
        return $result;
        
    }
}



