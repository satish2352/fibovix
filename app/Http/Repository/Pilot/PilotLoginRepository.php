<?php
namespace App\Http\Repository\Pilot;
use App\Model\Pilot\PilotLogin;
use DB;
class PilotLoginRepository
{
    public function validatePilotLogin($uname,$pass)
    {
    	
    	return PilotLogin::where([['email','=',$uname],['password','=',$pass]])->select('*')->get();
    }
}