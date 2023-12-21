<?php
namespace App\Http\Service\Admin;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\AdminLoginRepository;
use session;
class AdminLoginService
{
    public function __construct()
    {
    	$this->repository=new AdminLoginRepository();
    }
    public function validateAdminLogin($req,$uname,$pass)
    {
    	$dataOfLogin=$this->repository->validateAdminLogin($uname,$pass);
    	if(count($dataOfLogin)>0)
    	{
    		$req->session()->put('adminId',$dataOfLogin[0]->id);
    		$req->session()->put('adminName',$dataOfLogin[0]->name);
            return '1';
    	}
        else
        {
            return redirect('admin');
        }
    }
}