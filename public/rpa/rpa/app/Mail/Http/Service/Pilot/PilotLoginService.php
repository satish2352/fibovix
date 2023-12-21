<?php
namespace App\Http\Service\Pilot;
use Illuminate\Http\Request;
use App\Http\Repository\Pilot\PilotLoginRepository;
use session;
class PilotLoginService
{
    public function __construct()
    {
    	$this->repository=new PilotLoginRepository();
    }
    public function validatePilotLogin($req,$uname,$pass)
    {
    	$dataOfLogin=$this->repository->validatePilotLogin($uname,$pass);
    	if(count($dataOfLogin)>0)
    	{
    		$req->session()->put('pilotId',$dataOfLogin[0]->id);
            return '1';
    	}
        else
        {
            return redirect('pilotlogin');
        }
    }
}