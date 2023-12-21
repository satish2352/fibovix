<?php
namespace App\Http\Repository\Student;
use App\Model\Student\StudentLogin;
use DB;
class StudentLoginRepository
{
    public function validateStudentLogin($uname,$pass)
    {
    	
    	return StudentLogin::where([['email','=',$uname],['password','=',$pass]])->select('*')->get();
    }
}