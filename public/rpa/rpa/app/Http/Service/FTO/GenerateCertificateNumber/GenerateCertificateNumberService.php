<?php
namespace App\Http\Service\FTO\GenerateCertificateNumber;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\GenerateCertificateNumber\GenerateCertificateNumberRepository;
use session;
class GenerateCertificateNumberService
{
    public function __construct()
    {
    	$this->repository=new GenerateCertificateNumberRepository();
    }
    
    public function getAllGenerateCertificateNumberList($id)
    {
        $allGenerateCertificateNumber=$this->repository->getAllGenerateCertificateNumberList($id);
        return $allGenerateCertificateNumber;
    }
    
    
    
    
    
    public function saveGenerateCertificateNumberForm($req)
    {
            $ftoId=session()->get('ftoId');
            $certificatedata=array(
            'certificate'=>$req->certificate,
            'number'=>$req->number,
            'ftoId'=>$ftoId,
            'status'=>0
            );
             
            $dataOfGenerateCertificateNumber=$this->repository->saveGenerateCertificateNumberForm($certificatedata);
    }
    
    
    
   
}