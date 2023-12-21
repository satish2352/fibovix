<?php
namespace App\Http\Controllers\FTO\RegisteredStudents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\RegisteredStudentss\RegisteredStudentsService;
use App\Http\Controllers\Common\CommonController;

use Session;
class RegisteredStudentsController extends Controller
{
   public function __construct()
	{
		$this->service=new RegisteredStudentsService();
		$this->serviceNew=new CommonController();
	}
   public function index()
   {
        $allRegisteredStudentss=$this->service->getAllRegisteredStudentsList('');
        $CategoryList=$this->serviceNew->getCategoryList('');
        $DurationList=$this->serviceNew->getDurationList('');
        $statesofAdminList=$this->serviceNew->getAllAdminState('');
        return view('fto.registeredstudents.registeredstudents', compact('allRegisteredStudentss','CategoryList','DurationList','statesofAdminList'));
   }
   
}