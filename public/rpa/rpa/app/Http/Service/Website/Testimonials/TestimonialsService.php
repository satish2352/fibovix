<?php
namespace App\Http\Service\Website\Testimonials;
use Illuminate\Http\Request;
use App\Http\Repository\Website\Testimonials\TestimonialsRepository;
use session;
class TestimonialsService
{
    public function __construct()
    {
    	$this->repository=new TestimonialsRepository();
    }
    
    public function getAllTestimonialsList()
    {
        $allTestimonialsList=$this->repository->getAllTestimonialsList();
        
        return $allTestimonialsList;
    }
}