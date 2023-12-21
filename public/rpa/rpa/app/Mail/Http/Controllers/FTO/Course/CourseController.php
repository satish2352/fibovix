<?php
namespace App\Http\Controllers\FTO\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\Courses\CourseService;
use App\Http\Controllers\Common\CommonController;

use Session;
class CourseController extends Controller
{
   public function __construct()
	{
		$this->service=new CourseService();
		$this->serviceNew=new CommonController();
	}
   public function index()
   {
        $allCourses=$this->service->getAllCoursesList('');
        $CategoryList=$this->serviceNew->getCategoryList('');
        $DurationList=$this->serviceNew->getDurationList('');
        $statesofAdminList=$this->serviceNew->getAllAdminState('');
        return view('fto.course.courses', compact('allCourses','CategoryList','DurationList','statesofAdminList'));
   }
   
   
   public function approvePilot($id,$approvalVal)
   {
      
        if($approvalVal==0)
        {
            $setApproval=1;
            // Session::flash('success','Pilot Approved Successfully');
        }
        else
        {
            $setApproval=0;
            // Session::flash('error','Pilot Dispproved Successfully');
        }
        $result=$this->service->approvePilot($id,$setApproval);
        
        $allPilots=$this->service->getAllPilotsList();
        //Session::flash('success','Pilot Approved Successfully');
        return view('fto.pilots.pilots', compact('allPilots'));
   }
   
   
   
   
    
      public function savecourse(Request $req)
      {
      		$allCourses=$this->service->saveCourseForm($req);
      		return redirect('ftocourseslist');
      }
      
    
   
   //Course Date
   public function coursesdatelist(Request $req)
   {

    	if(isset($req->deleteOrEditState))
    	{

    		if($req->deleteOrEditState=='deleteSmstemplate')
    		{
    			// for delete template
    			$courseDateId=$req->ftoInstructorId;
    			return $this->service->deleteDate($courseDateId);

    		}
    		if($req->deleteOrEditState=='editstate')
    		{
    			// for edit template
    			$ftoInstructorId=$req->ftoInstructorId;
    			$openModal=1;
    			$allCourseList =$this->service->getAllCoursesList('');
    			$allDateForEdit =$this->service->getAllDateList($ftoInstructorId);
    			$dateList =$this->service->getAllDateList($ftoInstructorId='');
	        	return view('fto.course.coursedate',compact('allState','allDateForEdit','openModal','allCourseList','dateList'));

    		}
    	}

    	if(isset($req->editedOrFreshEntries))
    	{
    		if($req->editedOrFreshEntries=='1')
	    	{
	    	    
	    	    $courseDateId=$req->ftoInstructorId;
	    	    $courseId=$req->courseId;
	    		$fromDate=date("Y-m-d", strtotime($req->fromDate));
	    		$toDate=date("Y-m-d", strtotime($req->toDate));
	    		$underFTO='';
	    		//$req->ftoId;
	    		dd($courseId);
	    		$result=$this->service->updateDate($fromDate,$toDate,$courseDateId,$underFTO,$courseId);
	    	}
	    	if($req->editedOrFreshEntries=='0')
	    	{
	    	    
	    		$fromDate=date("Y-m-d", strtotime($req->fromDate));
	    		$toDate=date("Y-m-d", strtotime($req->toDate));
	    		$underFTO='';
	    		dd($fromDate);
	    		//$req->ftoId;
	    		$courseId=$req->courseId;
	    		$result=$this->service->addNewDate($fromDate,$toDate,$underFTO,$courseId);
	    	}
    	}
    	$allDateForEdit="";
	   	$dateList =$this->service->getAllDateList($ftoInstructorId='');
	   	$allCourseList =$this->service->getAllCoursesList('');
    	$openModal=0;
        return view('fto.course.coursedate',compact('allState','allDateForEdit','openModal','dateList','allCourseList'));
    	
       
    }

}