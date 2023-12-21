<?php
namespace App\Http\Repository\Website\Pilot;
use App\Model\Pilot\PilotReg;
use DB;
class PilotRegistrationRepository
{
    public function saveRegForm($data)
    {
    	return PilotReg::insert($data);
    }
}