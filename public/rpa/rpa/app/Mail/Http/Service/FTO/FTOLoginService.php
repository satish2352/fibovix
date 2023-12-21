<?php
namespace App\Http\Service\FTO;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\FTOLoginRepository;
use session;
class FTOLoginService
{
    public function __construct()
    {
    	$this->repository=new FTOLoginRepository();
    }
    public function validateFTOLogin($req,$uname,$pass)
    {
    	$dataOfLogin=$this->repository->validateFTOLogin($uname,$pass);
    	if(count($dataOfLogin)>0)
    	{
    		$req->session()->put('ftoId',$dataOfLogin[0]->id);
            return '1';
    	}
        else
        {
            return redirect('fto');
        }
    }
}