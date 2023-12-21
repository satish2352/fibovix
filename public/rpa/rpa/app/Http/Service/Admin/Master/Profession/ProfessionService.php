<?php
namespace App\Http\Service\Admin\Master\Profession;
use Illuminate\Database\QueryException;
use App\Http\Repository\Admin\Master\Profession\ProfessionRepository;


class ProfessionService
{

    public function __construct()
    {        
        $this->repo = new ProfessionRepository();
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