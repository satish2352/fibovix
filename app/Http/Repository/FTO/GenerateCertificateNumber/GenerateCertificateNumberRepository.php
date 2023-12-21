<?php
namespace App\Http\Repository\FTO\GenerateCertificateNumber;
use App\Model\FTO\GenerateCertificateNumber;
use DB;
class GenerateCertificateNumberRepository
{
    public function getAllGenerateCertificateNumberList($id)
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
    	
    	return DB::Select("SELECT `id`, `ftoId`, `certificate`, `number`, `status`, `created_at`, `updated_at` FROM `certificatenumber` where ftoId = '$FTOId' ".$dateCondition." ");
    }
    
    
    
    public function saveGenerateCertificateNumberForm($certificatedata)
    {
    	return GenerateCertificateNumber::insert($certificatedata);
    }
    
}