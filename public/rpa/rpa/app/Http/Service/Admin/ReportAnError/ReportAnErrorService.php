<?php
namespace App\Http\Service\Admin\ReportAnError;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\ReportAnError\ReportAnErrorRepository;
use session;
class ReportAnErrorService
{
    public function __construct()
    {
    	$this->repository=new ReportAnErrorRepository();
    }
    
    public function getReportAnErrorList()
    {
        $ReportAnErrorList=$this->repository->getReportAnErrorList();
        return $ReportAnErrorList;
    }
    
    
}