<?php
namespace App\Http\Service\Website\FTO;
use Illuminate\Http\Request;
use App\Http\Repository\Website\FTO\FTORepository;
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
        //dd($allPilots);
    }
    
    
    public function approveFTO($id,$setApproval)
    {
        $data=array(
              
                'adminApproved'=>$setApproval
            );
        $allFTOs=$this->repository->approveFTO($id,$data);
        return $allFTOs;
        //dd($allPilots);
    }
    
    
    /// FTO Search Functions
    public function getAllFTOForSearchPageAfterSomeStateCityChange($stateId,$cityId)
    {
        $result=$this->repository->getAllFTOForSearchPageAfterSomeStateCityChange($stateId,$cityId);
        return $result;
    }
    
    
    
    public function getAllFTOsAdvertise()
    {
        $allFTOsAdvertise=$this->repository->getAllFTOsAdvertise();
        return $allFTOsAdvertise;
       
    }
    
   
}