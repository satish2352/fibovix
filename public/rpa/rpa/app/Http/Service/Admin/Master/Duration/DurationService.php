<?php
namespace App\Http\Service\Admin\Master\Duration;
use Illuminate\Database\QueryException;
use App\Http\Repository\Admin\Master\Duration\DurationRepository;


class DurationService
{

    public function __construct()
    {        
        $this->repo = new DurationRepository();
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