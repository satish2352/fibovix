<?php
namespace App\Http\Service\Student;
use Illuminate\Http\Request;
use App\Http\Repository\Student\StudentLoginRepository;
use session;
class StudentLoginService
{
    public function __construct()
    {
    	$this->repository=new StudentLoginRepository();
    }
    public function validateStudentLogin($req,$uname,$pass)
    {
        $dataOfLogin=$this->repository->validateStudentLogin($uname,$pass);
        
    	if(count($dataOfLogin)>0)
    	{
    	    
    		$req->session()->put('studentId',$dataOfLogin[0]->id);
    // 		$req->session()->put('pilotOANNo',$dataOfLogin[0]->oannumber);
    		$studentName=$dataOfLogin[0]->firstName." ".$dataOfLogin[0]->middleName." ".$dataOfLogin[0]->lastName;
    		$req->session()->put('studentName',$studentName);
    		
            return '1';
    	}
        else
        {
            return '0';
            //return redirect('student');
        }
    // 	$dataOfLogin=$this->repository->validateStudentLogin($uname,$pass);
    	
    // 	if($dataOfLogin=='1')
    // // 	if(count($dataOfLogin)>0)
    // 	{
    // 		$req->session()->put('studentId',$dataOfLogin[0]->id);
    // // 		$req->session()->put('pilotOANNo',$dataOfLogin[0]->oannumber);
    // 		$studentName=$dataOfLogin[0]->firstName." ".$dataOfLogin[0]->middleName." ".$dataOfLogin[0]->lastName;
    // 		$req->session()->put('studentName',$studentName);
    		
    //         return '1';
    // 	}
    //     else
    //     {
    //         return redirect('student');
    //     }
        
    // 	if(count($dataOfLogin)>0)
    // 	{
    // 		$req->session()->put('studentId',$dataOfLogin[0]->id);
    //         return '1';
    // 	}
    //     else
    //     {
    //         return redirect('student');
    //     }
    }
}