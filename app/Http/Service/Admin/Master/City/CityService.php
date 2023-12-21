<?php
namespace App\Http\Service\Admin\Master\City;
use Illuminate\Database\QueryException;
use App\Http\Repository\Admin\Master\City\CityRepository;


class CityService
{

    public function __construct()
    {        
        $this->repo = new CityRepository();
    }
    
    public function getAllStateNew()
    {
    	return $this->repo->getAllStateNew();
    }

    public function getAllState($stateId)
    {
    	return $this->repo->getAllState($stateId);
    }

    public function deleteState($stateId)
    {
    	return $this->repo->deleteState($stateId);
    }
    
    public function addNewState($stateId,$city)
    {
    	return $this->repo->addNewState($stateId,$city);
    }

    public function updateState($cityName,$cityId)
    {
    	return $this->repo->updateState($cityName,$cityId);;
    }
}