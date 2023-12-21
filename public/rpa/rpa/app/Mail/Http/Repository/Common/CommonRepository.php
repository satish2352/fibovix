<?php
namespace App\Http\Repository\Common;
use App\Model\Common\CommonState;
use App\Model\Common\CommonCity;
use App\Model\Common\AdminState;
use App\Model\Common\AdminCity;
use DB;
class CommonRepository
{
    
    //Get City By Ajax Call
    
    public function getCommonCityByStateId($stateId)
    {
    	return CommonCity::where('state_id', '=', $stateId)
        ->get();
    }
    
    public function getAdminCityByStateId($stateId)
    {
    	return AdminCity::where('stateId', '=', $stateId)->get()->toArray();
    }
    
    /// Corect /////////////////////////////
    //Universal
    
    public function getAllstate($stateId)
    {
        if($stateId=='')
        {
            $condition = "";
        }
        else
        {
            $condition = "WHERE `id` = '".$stateId."' ";
        }
        
        $result = DB::select("SELECT `id`, `name`, `state_code`, `country_code`, `created_at`, `updated_at` FROM `states`  ".$condition." ");
        
        return $result;
    }
    
    public function getAllcityByStateId($stateId)
    {
    	if($stateId=='')
        {
            $condition = "";
        }
        else
        {
            $condition = "WHERE `state_id` = '".$stateId."' ";
        }
        // echo "SELECT `id`, `city_code`, `state_id`, `name`, `created_at`, `updated_at` FROM `cities`  ".$condition." ";
        // die();
        
        $result = DB::select("SELECT `id`, `city_code`, `state_id`, `name`, `created_at`, `updated_at` FROM `cities`  ".$condition." ");
        //dd($result);
    
        return (array)$result;
    }
    
    public function getPerticularCityById($id)
    {
        if($id=='')
        {
            $condition = "";
        }
        else
        {
            $condition = "WHERE `id` = '".$id."' ";
        }
     
        $result = DB::select("SELECT `id`, `city_code`, `state_id`, `name`, `created_at`, `updated_at` FROM `cities`  ".$condition." ");
        return (array)$result;
    }
     
    //Created by admin
    public function getAllAdminState($stateId)
    {
    	if($stateId=='')
        {
            $condition = "";
        }
        else
        {
            $condition = "WHERE `id` = '".$stateId."' ";
        }
        
        $result = DB::select("SELECT `id`, `state`, `status`, `createdAt`, `updatedAt` FROM `statebyadmin` ".$condition." ");
        
        return $result;
    }
    
    public function getAllAdminCityByStateId($stateId)
    {
    	if($stateId=='')
        {
            $condition = "";
        }
        else
        {
            $condition = "WHERE `stateId` = '".$stateId."' ";
        }
        
        $result = DB::select("SELECT `id`, `stateId`, `city`, `status`, `createdAt`, `updatedAt` FROM `citybyadmin`   ".$condition." ");
        
        return $result;
    }
    
    public function getPerticularAdminCityById($id)
    {
        if($id=='')
        {
            $condition = "";
        }
        else
        {
            $condition = "WHERE `id` = '".$id."' ";
        }
        
        $result = DB::select("SELECT `id`, `stateId`, `city`, `status`, `createdAt`, `updatedAt` FROM `citybyadmin`   ".$condition." ");
        
        return $result;
    }
    
    
    
    
    
    
    
    public function getAllprofession($professionId)
    {
        if($professionId=='')
        {
            $condition = "";
        }
        else
        {
            $condition = "WHERE `id` = '".$professionId."' ";
        }
        
        $result = DB::select("SELECT `id`, `profession`, `status`, `createdAt`, `updatedAt` FROM `professionbyadmin` ".$condition." ");
        
        return $result;
    }
    
    
    
    
    
    ///////////////////////////////////
    
    
    public function getStateList()
    {
    	return CommonState::all();
    }
    
    
    public function getStateListwithId($id)
    {
    	return CommonState::where('id', '=', $id)->get()->toArray();
    }
    
    
    
    
    //  For All FTO Function
    public function getFTOList($approvedOrDis)
    {
    	
        if($approvedOrDis=='')
        {
            $condition = "";
        }
        else
        {
            $condition = "where adminApproved = '".$approvedOrDis."' ";
        }
        
        $result = DB::select("SELECT `id`, `firstName`, `middleName`, `lastName`, `email`, `mobile`, `adharNumber`, `proffession`, `stateID`, `cityId`, `description`, `address`, `zipCode`, `drivingLicence`, `eduQualification`, `passportPhoto`, `sentOtp`, `otpVerified`, `status`, `adminApproved`, `entryBy`, `createdAt`, `updatedAt` FROM `ftoregistration` ".$condition." ");
        
        return $result;
        
    }
    
    
    public function getFTODetails($ftoId)
    {
    	return DB::select("SELECT `id`, `firstName`, `middleName`, `lastName`, `email`, `password`, `mobile`, `adharNumber`, `proffession`, `stateID`, `cityId`, `description`, `address`, `zipCode`, `drivingLicence`, `eduQualification`, `passportPhoto`, `sentOtp`, `otpVerified`, `status`, `adminApproved`, `entryBy`, `createdAt`, `updatedAt` FROM `ftoregistration` WHERE id=".$ftoId." ");
    }
    
    
    
    //  For All Pilot Function
    public function getPilotList($ftoApproved,$adminApproved)
    {
    	
        if($ftoApproved=='' && $adminApproved=='')
        {
            $condition = "";
        }
        else
        {
            $condition = "where adminApproved = '".$approvedOrDis."' and ftoApproved = '".$ftoApproved."' ";
        }
        
        $result = DB::select("SELECT `id`, `firstName`, `middleName`, `lastName`, `email`, `password`, `mobile`, `adharNumber`, `category`, `courseId`, `courseDate`, `uaopnumber`, `uaopvalidity`, `uinnumber`, `uinvalidity`, `npnt`, `ftoId`, `droneSerialNumber`, `proffession`, `stateID`, `cityId`, `experience`, `passport`, `drivingLicence`, `eduQualification`, `passportPhoto`, `sentOtp`, `otpVerified`, `status`, `ftoApproved`, `adminApproved`, `entryBy`, `createdAt`, `updatedAt` FROM `pilotregistration` ".$condition." ");
        
        return $result;
        
    }
    
    
    
    public function getCategoryList($id)
    {
        if($id=='')
        {
            $condition="";
            
        }
        else
        {
            $condition="WHERE `id`='".$id."'";
        }
        
    	return DB::select("SELECT `id`, `category`, `addInfoReq`, `status`, `createdAt`, `updatedAt` FROM `category` ".$condition." ");
    }
    
    
    // Get Courses Details
    public function getAllCoursesDetails($id)
    {
        if($id=='')
        {
            $condition="";
            
        }
        else
        {
            $condition="WHERE `id`='".$id."'";
        }
        
        $result = DB::select("SELECT `id`, `category`, `courseName`, `description`, `duration`, `price`, `commission`, `state`, `city`, `image`, `pdf`, `createdBy`, `status`, `createdAt`, `updatedAt` FROM `courses` ".$condition." ");
        return $result;
    }
    
    
    
    
    
    public function getDurationList($id)
    {
        if($id=='')
        {
            $condition="";
        }
        else
        {
            $condition="WHERE `id`='".$id."'";
        }
        
    	return DB::select("SELECT `id`, `duration`, `status`, `createdAt`, `updatedAt` FROM `duration` ".$condition." ");
    }
    
    
    
    
    public function getStatesofAdminList()
    {
    	return AdminState::all();
    }
    
    
    
    
    
    public function getAdminCitybyid($id)
    {
    	return AdminCity::where('id', '=', $id)->get()->toArray();
    }
    
    
    public function getCitybyid($id)
    {
    	return CommonCity::where('id', '=', $id)->get()->toArray();
    }
    
    
}