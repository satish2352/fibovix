<?php
namespace App\Http\Controllers\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Student\StudentLoginService;
class StudentLoginController extends Controller
{
   public function __construct()
	{
		$this->service=new StudentLoginService();
	}
   public function loginStudent()
   {
   		return view('student.login');
   }
   public function validateStudentLogin(Request $req)
   {
      
   		$this->validateLogin($req);
   		$uname=$req->input('email');
   		$pass=$req->input('password');
   		$result=$this->service->validateStudentLogin($req,$uname,$pass);
   		
        if($result=='1')
         {
           
            return redirect('dashstudent');
         }
         else
         {
      
            return redirect('student')->with('success', 'You Have Entered Wrong Username Or Password. Please Try Again');
         }
   }
   public function validateLogin($req)						
   {
   		$this->validate($req,[
   			'email.required|email',
   			'password.required'
   		],
         [
            'email.email'=>'Enter proper email adddress',
            'email.required'=>'Enter email adddress',
            'password.required'=>'Enter password'
         ]
         );
   }
   public function logOut(Request $req)
   {
      $req->session()->forget('studentId');
      return redirect('student');
   }
   
}