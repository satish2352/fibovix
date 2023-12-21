<?php
namespace App\Http\Service\FTO\IndemnityContent;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\IndemnityContent\ContentRepository;
use session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
class ContentService
{
    public function __construct()
    {
    	$this->repository=new ContentRepository();
    }
     
    public function contentSave($req)
    {
      
        $result=$this->repository->contentSave($req);
        return true;
        
    }

   
}