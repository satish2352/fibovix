<?php
namespace App\Http\Service\Admin\Courses;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\Courses\CoursesRepository;
use session;
class CourseService
{
    public function __construct()
    {
    	$this->repository=new CoursesRepository();
    }
    
    public function getAllCoursesList()
    {
        $allCourses=$this->repository->getAllCoursesList();
        return $allCourses;
        //dd($allPilots);
    }
    
    
    public function approvePilot($id,$setApproval)
    {
        $data=array(
                'ftoApproved'=>$setApproval
            );
        $allPilots=$this->repository->approvePilot($id,$data);
        return $allPilots;
    }
    
    public function saveCourseForm($req)
    {
        // Course Image Code
        $CourseImage=public_path()."/asset/Course/Image";
          if ( !is_dir( $CourseImage) ) 
          {
            mkdir( $CourseImage );       
          }
          
          if (!empty($req->image))
          {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move($CourseImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
        
        // Course PDF Code
        $CoursePdf=public_path()."/asset/Course/Pdf";
          if ( !is_dir( $CoursePdf) ) 
          {
            mkdir( $CoursePdf );       
          }
          
          if (!empty($req->pdf))
          {
            $pdfsName = time().'.'.request()->pdf->getClientOriginalExtension();
            request()->pdf->move($CoursePdf, $pdfsName);
          }
          else
          {
              $pdfsName='';
          }
        
        
            $coursedata=array(
            'category'=>$req->category,
            'courseName'=>$req->courseTitle,
            'description'=>$req->description,
            'duration'=>$req->duration,
            'price'=>$req->coursePrice,
            'commission'=>0,
            'state'=>$req->state,
            'city'=>$req->city,
            'image'=>$imageName,
            'pdf'=>$pdfsName,
            'createdBy'=>0, // 0 Means FTO  && 1 Means Admin
            'status'=>0
            );
            
            //dd($coursedata);
             
                $dataOfCourse=$this->repository->saveCourseForm($coursedata);
    }
    
    /// Pilots Search Functions
    public function getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId,$ftoId)
    {
        $result=$this->repository->getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId,$ftoId);
        return $result;
    }
    
   
}