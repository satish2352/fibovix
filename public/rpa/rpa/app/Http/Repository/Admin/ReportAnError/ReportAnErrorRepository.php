<?php
namespace App\Http\Repository\Admin\ReportAnError;
use DB;
class ReportAnErrorRepository
{
    public function getReportAnErrorList()
    {
        return DB::Select("SELECT `id`, `name`, `email`, `mobileNumber`, `description`, `createdAt`, `updatedAt` FROM `reportanerror` ");
    }
    
}