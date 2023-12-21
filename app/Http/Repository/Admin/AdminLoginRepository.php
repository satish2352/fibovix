<?php
namespace App\Http\Repository\Admin;
use App\Models\User;
use DB;
class AdminLoginRepository
{
    public function validateAdminLogin($uname,$pass)
    {
    	
    	//return User::where([['u_email','=',$uname],['u_password','=',$pass]])->select('*')->get();
        $data = [];
        $data['user_details'] = User::where( [
            'u_email' => $uname,
            'is_active' =>true
            ])
            ->select('*')
            ->first();

            return $data;

    }
}