<?php
namespace App\Http\Repository\Admin\Master\Profession;
use Illuminate\Database\QueryException;
use DB;
class ProfessionRepository
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
    	return DB::Select("SELECT `id`, `profession`, `status` FROM `professionbyadmin` ".$stateCondition." ");
    }

    public function deleteState($stateId)
    {
    	return DB::delete("DELETE FROM `professionbyadmin` WHERE `id`=".$stateId." ");
    }

    public function addNewState($stateName)
    {
    	return DB::insert("INSERT INTO `professionbyadmin`(`profession`) VALUES ('".$stateName."') ");
    }

    public function updateState($stateName,$stateId)
    {
    	return DB::update("UPDATE `professionbyadmin` SET `profession`='".$stateName."' WHERE `id`='".$stateId."'");
    }
}