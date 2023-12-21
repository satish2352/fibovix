<?php
namespace App\Http\Service\Common;
use Illuminate\Http\Request;
use App\Http\Repository\Common\CommonRepository;
use session;
class CommonService
{
    public function __construct()
    {
    	$this->repository=new CommonRepository();
    }
    
    
    //Get City By Ajax Call
    public function getCommonCityByStateId($stateId)
    {
        $cityresult = $this->repository->getCommonCityByStateId($stateId);
        return $cityresult;
    }
    
    //Get City By Ajax Call
    public function getCommonCityByStateIdforupdate($stateId)
    {
        $cityresult = $this->repository->getCommonCityByStateIdforupdate($stateId);
        return $cityresult;
    }
    
    
    public function getAdminCityByStateId($stateId)
    {
        $cityresult = $this->repository->getAdminCityByStateId($stateId);
        return $cityresult;
    }
    
    /////// Corect
    public function getAllstate($stateId)
    {
        $stateIdresult = $this->repository->getAllstate($stateId);
        return $stateIdresult;
    }
    
    // New added
    public function getAllcity()
    {
        $cityIdresult = $this->repository->getAllcity();
        return $cityIdresult;
    }
    
    public function getPerticularStateById($stateId)
    {
        $stateId = $this->repository->getAllstate($stateId);
        return $stateId;
    }
    
    public function getAllcityByStateId($stateId)
    {
        $cityresult = $this->repository->getAllcityByStateId($stateId);
        return $cityresult;
    }
    
    public function getPerticularCityById($id)
    {
        //dd($stateId);
        $cityList = $this->repository->getPerticularCityById($id);
        return $cityList;
    }
    
    //ALL ADMIN STATE
    public function getAllAdminState($stateId)
    {
        $stateResult = $this->repository->getAllAdminState($stateId);
        return $stateResult;
    }
    
    public function getPerticularAdminStateById($stateId)
    {
        $cityList = $this->repository->getAllAdminState($stateId);
        return $cityList;
    }
    
    public function getAllAdminCityByStateId($stateId)
    {
        $cityresult = $this->repository->getAllAdminCityByStateId($stateId);
        return $cityresult;
    }
    
    public function getPerticularAdminCityById($stateId)
    {
        $cityList = $this->repository->getPerticularAdminCityById($stateId);
        return $cityList;
    }
    
    
    public function getAllprofession($professionId)
    {
        $professionList = $this->repository->getAllprofession($professionId);
        return $professionList;
    }
    
    ////////////////////////////
    
    
    //  For All FTO Function
    public function getFTOList($approvedOrDis)
    {
        $FTOresult = $this->repository->getFTOList($approvedOrDis);
        return $FTOresult;
    }
    
    public function getFTODetails($ftoId)
    {
    	return $this->repository->getFTODetails($ftoId);
    }
    
    
    //  For All Pilot Function
    public function getPilotList($ftoApproved,$adminApproved)
    {
        $Pilotresult = $this->repository->getPilotList($ftoApproved,$adminApproved);
        return $Pilotresult;
    }
    
    public function getCategoryList($id)
    {
        $Categoryresult = $this->repository->getCategoryList($id);
        return $Categoryresult;
    }
    
    
    public function getAllCoursesDetails($id)
    {
        $allCoursesDetails = $this->repository->getAllCoursesDetails($id);
        return $allCoursesDetails;
    }
    
    
    public function getDurationList($id)
    {
        $Durationresult = $this->repository->getDurationList($id);
        return $Durationresult;
    }
    
    public function getAllContent($contentId1)
    {
       return $this->repository->getAllContent($contentId1);
       
    }
    
    // public function getStatesofAdminList()
    // {
    //     $adminstateresult = $this->repository->getStatesofAdminList();
    //     return $adminstateresult;
    // }
    
    
    
    
    
    // public function getAdminCitybyid($id)
    // {
    //     $cityresult = $this->repository->getAdminCitybyid($id);
    //     return $cityresult;
    // }
    
    
    // public function getCitybyid($id)
    // {
    //     $cityresult = $this->repository->getCitybyid($id);
    //     return $cityresult;
    // }
    
    
    
    
    // public function getStateList()
    // {
    //     $stateresult = $this->repository->getStateList();
    //     return $stateresult;
    // }
    
    // public function getStateListwithId($id)
    // {
    //     $stateresult = $this->repository->getStateListwithId($id);
    //     return $stateresult;
    // }
    
    

}