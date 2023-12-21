<?php
namespace App\Http\Repository\Admin;
use App\Model\Admin\AdminLogin;
use DB;
class AdminLoginRepository
{
    public function validateAdminLogin($uname,$pass)
    {
    	
    	return AdminLogin::where([['email','=',$uname],['password','=',$pass]])->select('*')->get();
    }
}