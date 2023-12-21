<?php
namespace App\Http\Service\Admin;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\AdminLoginRepository;
use session;
use Illuminate\Support\Facades\Hash;

class AdminLoginService
{
    public function __construct()
    {
    	$this->repository=new AdminLoginRepository();
    }
    public function validateAdminLogin($req,$uname,$pass)
    {
    	$dataOfLogin=$this->repository->validateAdminLogin($uname,$pass);
        // dd($dataOfLogin);
    	// if(count($dataOfLogin)>0)
    	// {
    	// 	$req->session()->put('adminId',$dataOfLogin[0]->id);
    	// 	$req->session()->put('adminName',$dataOfLogin[0]->name);
        //     return '1';
    	// }
        // else
        // {
        //     return redirect('admin');
        // }

        if($dataOfLogin['user_details']) {
            // use bcrypt for login
            $password = $req['password'];
            if (Hash::check($password, $dataOfLogin['user_details']['u_password'])) {
                $req->session()->put('adminId',$dataOfLogin['user_details']['id']);
                $req->session()->put('adminName',$dataOfLogin['user_details']['name']);
                $json = ['status'=>'success','msg'=>$dataOfLogin['user_details']];
            } else {
                $json = ['status'=>'failed','msg'=>'These credentials do not match our records.'];
            }
            
        } else {
            $json = ['status'=>'failed','msg'=>'These credentials do not match our records.'];
        }
        return $json;

    }
}