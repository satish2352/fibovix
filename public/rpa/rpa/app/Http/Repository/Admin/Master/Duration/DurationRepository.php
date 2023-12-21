<?php
namespace App\Http\Repository\Admin\Master\Duration;
use Illuminate\Database\QueryException;
use App\Model\Admin\Master\Duration;
use DB;
class DurationRepository
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
    	return DB::Select("SELECT `id`, `duration`, `status` FROM `duration` ".$categoryCondition." ");
    }

    public function deleteState($categoryId)
    {
    	return DB::delete("DELETE FROM `duration` WHERE `id`=".$categoryId." ");
    }

    public function addNewState($stateName)
    {
    	return DB::insert("INSERT INTO `duration`(`duration`) VALUES ('".$stateName."') ");
    }

    public function updateState($stateName,$categoryId)
    {
    	return DB::update("UPDATE `duration` SET `duration`='".$stateName."' WHERE `id`='".$categoryId."'");
    }
}