<?php
namespace App\Http\Service\FTO\ProvideStudentCertificate;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\ProvideStudentCertificate\ProvideStudentCertificateRepository;
use session;
class ProvideStudentCertificateService
{
    public function __construct()
    {
    	$this->repository=new ProvideStudentCertificateRepository();
    }
    
    public function getAllProvideStudentCertificateList($id)
    {
        $allProvideStudentCertificate=$this->repository->getAllProvideStudentCertificateList($id);
        return $allProvideStudentCertificate;
    }
    
    
    public function getstudentrecord($id)
    {
        $allCertificateInfo=$this->repository->getstudentrecord($id);
        //dd($allCertificateInfo);
        return $allCertificateInfo;
    }
    
    
    
   
}