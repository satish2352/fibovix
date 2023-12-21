<?php
namespace App\Http\Service\Admin\Master\SubCategory;
use Illuminate\Database\QueryException;
use App\Http\Repository\Admin\Master\SubCategory\SubCategoryRepository;


class SubCategoryService
{

    public function __construct()
    {        
        $this->repo = new SubCategoryRepository();
    }
    
    public function getAllStateNew()
    {
    	return $this->repo->getAllStateNew();
    }

    public function getAllState($serviceCategoryId)
    {
    	return $this->repo->getAllState($serviceCategoryId);
    }

    public function deleteState($serviceCategoryId)
    {
    	return $this->repo->deleteState($serviceCategoryId);
    }
    
    public function addNewState($serviceCategoryId,$subcategory )
    {
    	return $this->repo->addNewState($serviceCategoryId,$subcategory );
    }

    public function updateState($cityName,$subcategoryId)
    {
    	return $this->repo->updateState($cityName,$subcategoryId);;
    }
}