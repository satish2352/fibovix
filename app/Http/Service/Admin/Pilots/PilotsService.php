<?php
namespace App\Http\Service\Admin\Pilots;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\Pilots\PilotsRepository;
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
    }
    
    public function getAllPilotscovidList()
    {
        $allPilotscovid=$this->repository->getAllPilotscovidList();
        return $allPilotscovid;
    }
    
    
    public function approvePilot($id,$setApproval)
    {
        $data=array(
              
                'adminApproved'=>$setApproval
            );
        $allPilots=$this->repository->approvePilot($id,$data);
        return $allPilots;
        //dd($allPilots);
    }
    
    /// Pilots Search Functions
    public function getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId,$ftoId)
    {
        $result=$this->repository->getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId,$ftoId);
        return $result;
    }
    
   
}