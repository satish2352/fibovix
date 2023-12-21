<?php
namespace App\Http\Repository\Website\Footer;
use App\Model\Website\Reportanerror;
use DB;
class ReportanerrorRepository
{
    public function reportanerrorsave($reportanerrordata)
    {
    	return Reportanerror::insert($reportanerrordata);
    }
}