<?php
namespace App\Http\Service\Website\Advertise;
use Illuminate\Http\Request;
use App\Http\Repository\Website\Advertise\AdvertiseRepository;
use session;
class AdvertiseService
{
    public function __construct()
    {
    	$this->repository=new AdvertiseRepository();
    	//$this->repository=new AdvertiseRepository();
    }
    
    public function getAllAdvertiseList()
    {
        $allAdvertiseList=$this->repository->getAllAdvertiseList();
        
        return $allAdvertiseList;
    }
    
    public function getAllTestimonialsList()
    {
        $allTestimonialsList=$this->repository->getAllTestimonialsList();
        
        return $allTestimonialsList;
    }
}