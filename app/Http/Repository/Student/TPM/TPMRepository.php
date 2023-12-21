<?php
namespace App\Http\Repository\Student\TPM;
use App\Model\TPM;
use DB;
class TPMRepository
{
    public function getAllTPMList($id)
    {
        $StudentId=session()->get('studentId');
        
    	if($id !='')
    	{
    		$dateCondition="and `id`='".$id."'  ";
    	}
    	else
    	{
    		$dateCondition="";
    	}
    	//$result = DB::select("SELECT f.id as ftoIdFInal,f.firstName,f.middleName,f.lastName,f.email,f.mobile,f.stateID,f.cityId,f.status,f.adminApproved,f.entryBy,f.createdAt,f.updatedAt
        //, s.*,c.* from ftoregistration as f, states as s, cities as c where f.stateID=s.id and f.cityId=c.id");
        
    	//return DB::Select("SELECT c.courseownerid, c.id, s.courseId, s.id FROM courses c, studentregistration s where c.id = s.courseId and s.id = '$StudentId' ".$dateCondition." ");
    	
    	return DB::Select("SELECT s.id, s.courseId, c.id, c.courseownerid, t.* FROM studentregistration s, courses c, tpm t where s.courseId = c.id and c.courseownerid = t.whosetpm and s.id = '$StudentId' ".$dateCondition." ");
    }
    
}