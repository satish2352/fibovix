<?php
namespace App\Http\Repository\Admin\RequestACallback;
use DB;
class RequestACallbackRepository
{
    public function getRequestACallbackList()
    {
        return DB::Select("SELECT `id`, `name`, `email`, `mobileNumber`, `description`, `otp`, `isVerified`, `createdAt`, `updatedAt` FROM `requestacallback` where isVerified='1' ");
    }
    
    
    
    
    
}