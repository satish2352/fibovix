<?php
namespace App\Http\Controllers\FTO\IndemnityContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\IndemnityContent\ContentService;
use App\Http\Controllers\Common\CommonController;
use Session;
class ContentController extends Controller
{
   public function __construct()
	{
		$this->service=new ContentService();
		$this->serviceNew = new CommonController();
	}

   public function index()
   {
      return view('fto.indemnitycontent.bondcontent');
   }
     
   public function contentSave(Request $req)
   {
        $result=$this->service->contentSave($req);
        return redirect('bondcontent')->with('status','Information Submitted Sucessfully');
        
   }

}