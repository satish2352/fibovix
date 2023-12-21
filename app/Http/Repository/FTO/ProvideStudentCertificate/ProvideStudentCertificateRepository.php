<?php
namespace App\Http\Repository\FTO\ProvideStudentCertificate;
use App\Model\ProvideStudentCertificate;
use DB;
class ProvideStudentCertificateRepository
{
    public function getAllProvideStudentCertificateList($id)
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
    
    
    
    
    public function getstudentrecord($id)
    {
        $FTOId=session()->get('ftoId');
        
    	if($id !='')
    	{
    		$dateCondition=" s.id='".$id."' and f.id='$FTOId'  ";
    	}
    	else
    	{
    		$dateCondition="";
    	}
    	
    	return DB::Select("SELECT s.id, s.firstName, s.middleName, s.lastName, s.email, s.password, s.mobile, s.stateId, s.cityId, s.courseId, s.profession, s.aadharNumber, s.certificate, s.passportPhoto, s.addressProof, s.addressProofFront, s.addressProofBack, s.idNumber, s.createdAt, s.updatedAt, f.id as ftoid,f.firstName as ffn,f.middleName as fmn,f.lastName fln FROM studentregistration s, ftoregistration f where ".$dateCondition." ");
    }
    
}