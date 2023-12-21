<?php
namespace App\Http\Repository\Admin\Master\SubCategory;
use Illuminate\Database\QueryException;
use App\Model\Admin\SubCategory;
use DB;
class SubCategoryRepository
{
    
    public function getAllStateNew()
    {
        	return DB::Select("SELECT `id`, `servicecategory`, `status`  FROM servicecategory");
    }
    
	public function getAllState($serviceCategoryId)
    {
    	if($serviceCategoryId !='')
    	{
    		$stateCondition="and cba.id='".$serviceCategoryId."'";
    	}
    	else
    	{
    		$stateCondition="";
    	}
    	return DB::Select("SELECT cba.id,cba.serviceCategoryId,cba.subcategory ,cba.status,sba.id as serviceCategoryId,sba.servicecategory FROM  servicecategory as sba,`subcategory` as cba where sba.id=cba.serviceCategoryId ".$stateCondition."  ");
    }

    public function deleteState($serviceCategoryId)
    {
    	return DB::delete("DELETE FROM `subcategory` WHERE `id`=".$serviceCategoryId." ");
    }

    public function addNewState($serviceCategoryId,$subcategory)
    {
    	return DB::insert("INSERT INTO `subcategory`(`serviceCategoryId`,subcategory ) VALUES ('".$serviceCategoryId."','".$subcategory."') ");
    }

    public function updateState($cityName,$subcategoryId)
    {
    	return DB::update("UPDATE `subcategory` SET `subcategory`='".$cityName."' WHERE `id`='".$subcategoryId."'");
    }
}