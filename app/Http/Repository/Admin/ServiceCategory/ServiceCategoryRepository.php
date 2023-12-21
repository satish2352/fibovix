<?php
namespace App\Http\Repository\Admin\Master\ServiceCategory;
use Illuminate\Database\QueryException;
use App\Model\Admin\ServiceCategory;
use DB;
class ServiceCategoryRepository
{
	public function getAllState($categoryId)
    {
    	if($categoryId !='')
    	{
    		$categoryCondition="WHERE `id`='".$categoryId."'";
    	}
    	else
    	{
    		$categoryCondition="";
    	}
    	return DB::Select("SELECT `id`, `servicecategory`, `status` FROM `servicecategory` ".$categoryCondition." ");
    }

    public function deleteState($categoryId)
    {
    	return DB::delete("DELETE FROM `servicecategory` WHERE `id`=".$categoryId." ");
    }

    public function addNewState($stateName)
    {
    	return DB::insert("INSERT INTO `servicecategory`(`servicecategory`) VALUES ('".$stateName."') ");
    }

    public function updateState($stateName,$categoryId)
    {
    	return DB::update("UPDATE `servicecategory` SET `servicecategory`='".$stateName."'  WHERE `id`='".$categoryId."'");
    }
}