<?php
namespace App\Http\Repository\Admin\TPM;
use App\Model\Admin\TPM;
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
    		$dateCondition=" ";
    		$dateCondition="WHERE `whosetpm`='".session()->get('adminId')."' and `tpmBy`='2' ";
    		
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
    
    
    public function approveTPMbyadmin($id,$data)
    {
        $result =DB::table('tpm')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}