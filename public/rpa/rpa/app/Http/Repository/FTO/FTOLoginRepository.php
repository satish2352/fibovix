<?php
namespace App\Http\Repository\FTO;
use App\Model\FTO\FTOLogin;
use DB;
class FTOLoginRepository
{
    public function validateFTOLogin($uname,$pass)
    {
    	
    	return FTOLogin::where([['email','=',$uname],['password','=',$pass]])->select('*')->get();
    }
}