<?php
namespace App\Http\Service\Admin\Master\Category;
use Illuminate\Database\QueryException;
use App\Http\Repository\Admin\Master\Category\CategoryRepository;


class CategoryService
{

    public function __construct()
    {        
        $this->repo = new CategoryRepository();
    }

    public function getAllState($stateId)
    {
    	return $this->repo->getAllState($stateId);
    }

    public function deleteState($stateId)
    {
    	return $this->repo->deleteState($stateId);
    }
    
    public function addNewState($stateName,$isRequired)
    {
    	return $this->repo->addNewState($stateName,$isRequired);
    }

    public function updateState($stateName,$stateId,$isRequired)
    {
    	return $this->repo->updateState($stateName,$stateId,$isRequired);
    }
}