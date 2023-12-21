<?php
namespace App\Http\Controllers\Admin\ReportAnError;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\ReportAnError\ReportAnErrorService;
class ReportAnErrorController extends Controller
{
   public function __construct()
	{
		$this->service=new ReportAnErrorService();
	}
	
   public function index()
   {
        $reportAnErrorList=$this->service->getReportAnErrorList();
   		return view('admin.reportanerror.reportanerror',compact('reportAnErrorList'));
   }

}