<?php
namespace App\Http\Service\Admin\Rating;
use Illuminate\Database\QueryException;
use App\Http\Repository\Admin\Rating\FTOInstructorRepository;


class FTOInstructorService
{

    public function __construct()
    {        
        $this->repository = new FTOInstructorRepository();
    }

    public function getAllState($stateId)
    {
    	return $this->repository->getAllState($stateId);
    }

    // public function deleteState($stateId)
    // {
    // 	return $this->repo->deleteState($stateId);
    // }
    
    // public function addNewState($stateName)
    // {
    // 	return $this->repo->addNewState($stateName);
    // }

    // public function updateState($stateName,$stateId)
    // {
    // 	return $this->repo->updateState($stateName,$stateId);
    // }
    
     public function ftoInstructorRating($id,$pilotRating)
    {
        $data=array(
              
                'rating'=>$pilotRating
            );
         $result=$this->repository->ftoInstructorRating($id,$data);
      
        return 0;
    }
}