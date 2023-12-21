<?php
namespace App\Http\Service\Admin\Rating;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\Rating\FTORepository;
use session;
class FTOService
{
    public function __construct()
    {
    	$this->repository=new FTORepository();
    }
    
    public function getAllFTOsList()
    {
        $allFTOs=$this->repository->getAllFTOsList();
        return $allFTOs;
    }
    
    
    public function admFTORating($id,$rating)
    {
        $data=array(
              
                'rating'=>$rating
            );
        $result=$this->repository->admFTORating($id,$data);
        return $result;
    }
}