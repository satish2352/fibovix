<?php
namespace App\Http\Repository\FTO\Instructor;
use Illuminate\Database\QueryException;
use App\Model\Admin\State;
use DB;
use Session;
class FTOInstructorRepository
{
	public function getAllState($stateId)
    {
    	if($stateId !='')
    	{
    		$stateCondition="and `id`='".$stateId."'";
    	}
    	else
    	{
    		$stateCondition="";
    	}
    	
    	$underFTO=session()->get('ftoId');
    	return DB::Select("SELECT `id`, `entryBy`, `instructorName`,status , `createdAt`, `updatedAt` FROM `ftoinstructor` WHERE `underFTO`='".$underFTO."'  ".$stateCondition." ");
    }

    public function deleteState($stateId)
    {
    	return DB::delete("DELETE FROM `ftoinstructor` WHERE `id`=".$stateId." ");
    }

    public function addNewState($stateName)
    {
        $underFTO=session()->get('ftoId');
    	return DB::insert("INSERT INTO `ftoinstructor`(`instructorName`,entryBy,underFTO) VALUES ('".$stateName."','".$underFTO."','".$underFTO."') ");
    }

    public function updateState($stateName,$stateId)
    {
    	return DB::update("UPDATE `ftoinstructor` SET `instructorName`='".$stateName."' WHERE `id`='".$stateId."'");
    }
}