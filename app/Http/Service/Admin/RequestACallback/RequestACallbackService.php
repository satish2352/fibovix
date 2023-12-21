<?php
namespace App\Http\Service\Admin\RequestACallback;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\RequestACallback\RequestACallbackRepository;
use session;
class RequestACallbackService
{
    public function __construct()
    {
    	$this->repository=new RequestACallbackRepository();
    }
    
    public function getRequestACallbackList()
    {
        $RequestACallbackList=$this->repository->getRequestACallbackList();
        return $RequestACallbackList;
    }
    
    
}