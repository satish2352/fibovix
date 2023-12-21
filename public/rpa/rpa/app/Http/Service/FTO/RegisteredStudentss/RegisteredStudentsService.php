<?php
namespace App\Http\Service\FTO\RegisteredStudentss;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\RegisteredStudents\RegisteredStudentsRepository;
use session;
class RegisteredStudentsService
{
    public function __construct()
    {
    	$this->repository=new RegisteredStudentsRepository();
    }
    
    public function getAllRegisteredStudentsList($id)
    {
        $allRegisteredStudents=$this->repository->getAllRegisteredStudentsList($id);
        return $allRegisteredStudents;
        //dd($allPilots);
    }
    
    
    
   
}