<?php
namespace App\Http\Repository\FTO\StudentCertificate;
use Illuminate\Http\Request;
use App\Model\FTO\StudentCertificate\CertificateReg;
use DB;
class CertificateRepository

{
    
    public function contentSave($req)
    {
	    
    	 	$data=array(
                  'certificate' => $req->input('certificate'),
                  'number' => $req->input('number')
                  );
    			return CertificateReg::insert($data);
    }
    
   
    
}