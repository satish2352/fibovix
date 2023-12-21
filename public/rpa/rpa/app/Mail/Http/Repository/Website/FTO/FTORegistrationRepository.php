<?php
namespace App\Http\Repository\Website\FTO;
use App\Model\FTO\FTOReg;
use DB;
class FTORegistrationRepository
{
    public function saveRegForm($data)
    {
    	return FTOReg::insert($data);
    }
}