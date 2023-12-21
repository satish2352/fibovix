<?php
namespace App\Http\Service\FTO\StudentCertificate;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\StudentCertificate\CertificateRepository;
use session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
class CertificateService
{
    public function __construct()
    {
    	$this->repository=new CertificateRepository();
    }
        
    public function contentSave($req)
    {
      
        
        $result=$this->repository->contentSave($req);
        return true;
        
    }

   
}