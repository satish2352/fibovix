<?php
namespace App\Http\Repository\Admin\Master\State;
use Illuminate\Database\QueryException;
use App\Model\Admin\State;
use DB;
class StateRepository
{
	public function getAllState($stateId)
    {
    	if($stateId !='')
    	{
    		$stateCondition="WHERE `id`='".$stateId."'";
    	}
    	else
    	{
    		$stateCondition="";
    	}
    	return DB::Select("SELECT `id`, `state`, `status` FROM `statebyadmin` ".$stateCondition." ");
    }

    public function deleteState($stateId)
    {
    	return DB::delete("DELETE FROM `statebyadmin` WHERE `id`=".$stateId." ");
    }

    public function addNewState($stateName)
    {
    	return DB::insert("INSERT INTO `statebyadmin`(`state`) VALUES ('".$stateName."') ");
    }

    public function updateState($stateName,$stateId)
    {
    	return DB::update("UPDATE `statebyadmin` SET `state`='".$stateName."' WHERE `id`='".$stateId."'");
    }
}