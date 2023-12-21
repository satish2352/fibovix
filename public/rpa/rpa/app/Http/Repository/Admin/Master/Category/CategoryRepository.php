<?php
namespace App\Http\Repository\Admin\Master\Category;
use Illuminate\Database\QueryException;
use App\Model\Admin\Category;
use DB;
class CategoryRepository
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
    	return DB::Select("SELECT `id`, `category`,addInfoReq, `status` FROM `category` ".$categoryCondition." ");
    }

    public function deleteState($categoryId)
    {
    	return DB::delete("DELETE FROM `category` WHERE `id`=".$categoryId." ");
    }

    public function addNewState($stateName,$isRequired)
    {
    	return DB::insert("INSERT INTO `category`(`category`,`addInfoReq`) VALUES ('".$stateName."','".$isRequired."') ");
    }

    public function updateState($stateName,$categoryId,$isRequired)
    {
    	return DB::update("UPDATE `category` SET `category`='".$stateName."',`addInfoReq`='".$isRequired."'  WHERE `id`='".$categoryId."'");
    }
}