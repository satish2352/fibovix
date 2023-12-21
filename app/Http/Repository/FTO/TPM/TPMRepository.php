<?php
namespace App\Http\Repository\FTO\TPM;
use App\Model\FTO\TPM;
use DB;
class TPMRepository
{
    public function getAllTPMList($id)
    {
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition="WHERE `whosetpm`='".session()->get('ftoId')."' and `tpmBy`='1' ";
    		
    	}
    	
    		return DB::Select("SELECT `id`, `whosetpm`, `tpmBy`, `title`, `content`, `createdOn`, `pdf`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `tpm` ".$dateCondition." ");
    }
    
    
    public function savetpmForm($tpmdata)
    {
    	return TPM::insert($tpmdata);
    }
    
    
    
    
    public function approveTPM($id,$data)
    {
        $result =DB::table('tpm')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}