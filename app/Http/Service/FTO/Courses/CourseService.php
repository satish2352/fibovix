<?php
namespace App\Http\Service\FTO\Courses;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\Courses\CoursesRepository;
use session;
class CourseService
{
    public function __construct()
    {
    	$this->repository=new CoursesRepository();
    }
    
    public function getAllCoursesList($id)
    {
        $allCourses=$this->repository->getAllCoursesList($id);
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
        
            $category = explode('*', $req->category);
            $ftoId=session()->get('ftoId');
        
            $coursedata=array(
            'category'=>$category[0],
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
            'courseownerid'=>$ftoId,
            'status'=>0
            );
            
            
             
                $dataOfCourse=$this->repository->saveCourseForm($coursedata);
    }
    
    
    /// Funation for Course Date
    public function getAllDateList($ftoInstructorId)
    {
    	return $this->repository->getAllDateList($ftoInstructorId);
    }
    
    public function getAllInstructorListUderFTO($id)
    {
    	return $this->repository->getAllInstructorListUderFTO($id);
    }

    public function deleteDate($courseDateId)
    {
    	return $this->repository->deleteDate($courseDateId);
    }
    
    public function addNewDate($fromDate,$toDate,$underFTO,$courseId)
    {
    	return $this->repository->addNewDate($fromDate,$toDate,$underFTO,$courseId);
    }

    public function updateDate($fromDate,$toDate,$courseDateId,$underFTO,$courseId)
    {
    	return $this->repository->updateDate($fromDate,$toDate,$courseDateId,$underFTO,$courseId);
    }
    
    
   
}