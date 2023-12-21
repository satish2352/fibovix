<?php
namespace App\Http\Repository\Admin\Master\City;
use Illuminate\Database\QueryException;
use App\Model\Admin\City;
use DB;
class CityRepository
{
    
    public function getAllStateNew()
    {
        	return DB::Select("SELECT `id`, `state`, `status`  FROM statebyadmin");
    }
    
	public function getAllState($stateId)
    {
    	if($stateId !='')
    	{
    		$stateCondition="and cba.id='".$stateId."'";
    	}
    	else
    	{
    		$stateCondition="";
    	}
    	return DB::Select("SELECT cba.id,cba.stateId,cba.city,cba.status,sba.id as stateid,sba.state FROM  statebyadmin as sba,`citybyadmin` as cba where sba.id=cba.stateId ".$stateCondition."  ");
    }

    public function deleteState($stateId)
    {
    	return DB::delete("DELETE FROM `citybyadmin` WHERE `id`=".$stateId." ");
    }

    public function addNewState($stateId,$city)
    {
    	return DB::insert("INSERT INTO `citybyadmin`(`stateId`,city) VALUES ('".$stateId."','".$city."') ");
    }

    public function updateState($cityName,$cityId)
    {
    	return DB::update("UPDATE `citybyadmin` SET `city`='".$cityName."' WHERE `id`='".$cityId."'");
    }
}