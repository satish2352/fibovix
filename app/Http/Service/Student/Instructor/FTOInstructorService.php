<?php
namespace App\Http\Service\FTO\Instructor;
use Illuminate\Database\QueryException;
use App\Http\Repository\FTO\Instructor\FTOInstructorRepository;


class FTOInstructorService
{

    public function __construct()
    {        
        $this->repo = new FTOInstructorRepository();
    }

    public function getAllState($stateId)
    {
    	return $this->repo->getAllState($stateId);
    }

    public function deleteState($stateId)
    {
    	return $this->repo->deleteState($stateId);
    }
    
    public function addNewState($stateName)
    {
    	return $this->repo->addNewState($stateName);
    }

    public function updateState($stateName,$stateId)
    {
    	return $this->repo->updateState($stateName,$stateId);
    }
}