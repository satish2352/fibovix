<?php
namespace App\Http\Repository\FTO\IndemnityContent;
use Illuminate\Http\Request;
use App\Model\FTO\IndemnityContent\ContentReg;
use DB;
class ContentRepository

{
    public function contentSave($req)
    {
	    
    	 	$data=array(
                  'bondContent' => $req->input('bondContent'),
                  );
    			return ContentReg::insert($data);
    }
    
   
    
}