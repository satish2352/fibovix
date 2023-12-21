<?php
namespace App\Http\Service\FTO\Pilots;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\Pilots\PilotsRepository;
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
    
    
    public function approvePilot($id,$setApproval)
    {
        $data=array(
              
                'ftoApproved'=>$setApproval
            );
        if($setApproval===0)
        {
            $dataAdmin=array(
              
                'adminApproved'=>$setApproval
            );
        }
        else
        {
            $dataAdmin=array();
        }
        $allPilots=$this->repository->approvePilot($id,$data,$setApproval,$dataAdmin);
        return $allPilots;
        //dd($allPilots);
    }
    
    /// Pilots Search Functions
    public function getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId)
    {
        $result=$this->repository->getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId);
        return $result;
    }
    
    
   
}