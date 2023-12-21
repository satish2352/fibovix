<?php
namespace App\Http\Service\FTO\Pilots;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\Pilots\CertificateRepository;
use session;
class CertificateService
{
    public function __construct()
    {
    	$this->repository=new CertificateRepository();
    }
    
    
    public function getCertificate($id)
    {
        $getCertificate=$this->repository->getCertificate($id);
        return $getCertificate;
    }
    
    
   
}