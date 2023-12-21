<?php
namespace App\Http\Service\FTO\UploadTPM;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\UploadTPM\UploadTPMRepository;
use session;
class UploadTPMService
{
    public function __construct()
    {
        $this->repository=new UploadTPMRepository();
    }
    public function saveUploadTPMForm($req)
    {
        
 
    $result=$this->repository->saveUploadTPMForm($req);
    return true;
    
    }

     public function getAllState($uploadTPMId)
    {
        return $this->repository->getAllState($uploadTPMId);
    }

    // public function deleteState($uploadTPMId)
    // {
    //     return $this->repository->deleteState($uploadTPMId);
    // }
    
    public function addNewState($uploadTPM)
    {
        return $this->repository->addNewState($uploadTPM);
    }

    // public function updateState($uploadTPM,$uploadTPMId)
    // {
    //     return $this->repository->updateState($uploadTPM,$uploadTPMId);
    // }
}