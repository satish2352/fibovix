<?php
namespace App\Http\Controllers\Common;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Common\CommonService;
class CommonController extends Controller
{
    public function __construct()
    {
    	$this->service=new CommonService();
    }

    //Get City By Ajax Call
    public function getCommonCityByStateId(Request $req)
    {
        $stateId = $req->stateId;
        $cityList = $this->service->getCommonCityByStateId($stateId);
        return view('common.city',compact('cityList'));
    }
    
    public function getAdminCityByStateId(Request $req)
    {
        $stateId = $req->stateId;
        $admincityList = $this->service->getAdminCityByStateId($stateId);
        return view('common.adminCity',compact('admincityList'));
    }
    
    
    //corect //////////////////////////////////////////////////////////////////////////
    //Universal
    public function getAllstate($stateId)
    {
        $stateId = $this->service->getAllstate($stateId);
        return $stateId;
    }
    
    public function getPerticularStateById($stateId)
    {
        $stateId = $this->service->getPerticularStateById($stateId);
        return $stateId;
    }
    
    public function getAllcityByStateId($stateId)
    {
        $cityList = $this->service->getAllcityByStateId($stateId);
        return $cityList;
    }
    
    public function getPerticularCityById($id)
    {
        $cityList = $this->service->getPerticularCityById($id);
        return $cityList;
    }
    
    //Created By Admin ///////////////////////////////
    public function getAllAdminState($stateId)
    {
        $cityList = $this->service->getAllAdminState($stateId);
        
        return $cityList;
    }
    
    public function getPerticularAdminStateById($stateId)
    {
        $cityList = $this->service->getPerticularAdminStateById($stateId);
        return $cityList;
    }
    
    public function getAllAdminCityByStateId($stateId)
    {
        $cityList = $this->service->getAllAdminCityByStateId($stateId);
        return $cityList;
    }
    
    public function getPerticularAdminCityById($stateId)
    {
        $cityList = $this->service->getPerticularAdminCityById($stateId);
        return $cityList;
    }
    
    
    public function getAllprofession($professionId)
    {
        $professionList = $this->service->getAllprofession($professionId);
        return $professionList;
    }
    
    
    
    /// end corect /////////////////////////////////////////////////////////////////////////////////////
    
    
    
    
    
    //  For All FTO Function
    public function getFTOList($approvedOrDis)
    {
        $FTOList = $this->service->getFTOList($approvedOrDis);
        return $FTOList;
    }
    
    public function getFTODetails($ftoId)
    {
        return $this->service->getFTODetails($ftoId);
    }
    
    //  For All Pilot Function
    
    public function getPilotList($ftoApproved,$adminApproved)
    {
        $PilotList = $this->service->getPilotList($ftoApproved,$adminApproved);
        return $PilotList;
    }
    
    
    public function getCategoryList($id)
    {
        $CategoryList = $this->service->getCategoryList($id);
        
        return $CategoryList;
    }
    
    
    public function getAllCoursesDetails($id)
    {
        $coursesDetails = $this->service->getAllCoursesDetails($id);
        return $coursesDetails;
    }
   
    
    public function getDurationList($id)
    {
        $DurationList = $this->service->getDurationList($id);
       
        return $DurationList;
    }
   
   
//   public function getStatesofAdminList()
//     {
//         $adminStateList = $this->service->getStatesofAdminList();
//         return $adminStateList;
//     }
    
    
    
    // public function getAdminCitybyid($id)
    // {
    //     $admincityList = $this->service->getAdminCitybyid($id);
    //     return $admincityList;
    // }
    
    // public function getCitybyid($id)
    // {
    //     $cityList = $this->service->getCitybyid($id);
    //     return $cityList;
    // }
   
   
   
   // public function getStateList()
    // {
    //     $stateList = $this->service->getStateList();
    //     return $stateList;
    // }
    
    // public function getStateListwithId($id)
    // {
       
    //     $stateresult = $this->service->getStateListwithId($id);
    //     return $stateresult;
    // }
    
   
}