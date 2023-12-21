<?php
namespace App\Http\Repository\Admin\FTO;
use Illuminate\Database\QueryException;
use App\Model\Admin\State;
use DB;
class FTOInstructorRepository
{
	public function getAllInstructorList($id)
    {
    	if($id !='')
    	{
    		$stateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$stateCondition="";
    	}
    	
    	return DB::Select("SELECT `id`, `entryBy`,underFTO, `instructorName`,status , `createdAt`, `updatedAt` FROM `ftoinstructor` ".$stateCondition." ");
    }
    
    
    public function getAllInstructorListUderFTO($id)
    {
    	return DB::Select("SELECT `id`, `entryBy`,underFTO, `instructorName`,status , `createdAt`, `updatedAt` FROM `ftoinstructor` WHERE `underFTO`='".$id."' ");
    }
    
    

    public function deleteState($stateId)
    {
    	return DB::delete("DELETE FROM `ftoinstructor` WHERE `id`=".$stateId." ");
    }

    public function addNewInstructor($instructorName,$underFTO)
    {
    	return DB::insert("INSERT INTO `ftoinstructor`(`instructorName`,entryBy,underFTO) VALUES ('".$instructorName."','0','".$underFTO."') ");
    }

    public function updateState($instructorName,$stateId,$underFTO)
    {
    	return DB::update("UPDATE `ftoinstructor` SET `instructorName`='".$instructorName."' , underFTO ='".$underFTO."' WHERE `id`='".$stateId."'");
    }
    
    
}