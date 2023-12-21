<?php
namespace App\Http\Repository\FTO\RegisteredStudents;
use App\Model\RegisteredStudents;
use DB;
class RegisteredStudentsRepository
{
    public function getAllRegisteredStudentsList($id)
    {
        $FTOId=session()->get('ftoId');
    	if($id !='')
    	{
    		$dateCondition="and `id`='".$id."'  ";
    	}
    	else
    	{
    		$dateCondition="";
    	}
    	
    	return DB::Select("SELECT s.id, s.firstName, s.middleName, s.lastName, s.email, s.password, s.mobile, s.stateId, s.cityId, s.courseId, s.profession, s.aadharNumber,s.certificate, s.passportPhoto, s.addressProof, s.addressProofFront, s.addressProofBack, s.idNumber, s.createdAt, s.updatedAt, c.id, c.courseName FROM studentregistration s, courses c where s.courseId = c.id ".$dateCondition." ");
    }
    
}