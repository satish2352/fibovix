<?php
namespace App\Http\Service\Student\TPM;
use Illuminate\Http\Request;
use App\Http\Repository\Student\TPM\TPMRepository;
use session;
class TPMService
{
    public function __construct()
    {
    	$this->repository=new TPMRepository();
    }
    
    public function getAllTPMList($id)
    {
        $allTPM=$this->repository->getAllTPMList($id);
        return $allTPM;
       
    }
    
    
}