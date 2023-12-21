<?php
namespace App\Http\Service\FTO\Rating;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\Rating\PilotsRepository;
use session;
class PilotsService
{
    public function __construct()
    {
    	$this->repository=new PilotsRepository();
    }
    
    public function getAllPilotsList()
    {
        $allPilots=$this->repository->getAllPilotsList();
        return $allPilots;
        //dd($allPilots);
    }
    
    
    public function FTOPilotRating($id,$pilotRating)
    {
        $data=array(
              
                'rating'=>$pilotRating
            );
         $result=$this->repository->FTOPilotRating($id,$data);
      
        return 0;
    }
    
    /// Pilots Search Functions
    public function getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId)
    {
        $result=$this->repository->getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId);
        return $result;
    }
    
    
   
}