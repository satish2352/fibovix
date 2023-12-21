<?php
namespace App\Http\Repository\Admin\FTO;
use App\Model\FTO\FTOReg;
use DB;
class FTORepository
{
    public function getAllFTOsList()
    {
        $result = DB::select("SELECT f.id as ftoIdFInal,f.firstName,f.middleName,f.lastName,f.email,f.mobile,f.stateID,f.cityId,f.status,f.adminApproved,f.entryBy,f.createdAt,f.updatedAt
        , s.*,c.* from ftoregistration as f, states as s, cities as c where f.stateID=s.id and f.cityId=c.id");
        
        //$result = DB::select("SELECT * from ftoregistration");
        return $result;
        
    }
    
    
    public function approveFTO($id,$data)
    {
        $result =DB::table('ftoregistration')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data); 
        
    }
    
    
    /// FTO Search Functions
    public function getAllFTOForSearchPageAfterSomeStateCityChange($stateId,$cityId)
    {
         if($stateId=='')
        {
            $stateIdFinal="";
            $stateCond="";
        }
        else
        {
            $stateIdFinal=$stateId;
            $stateCond="and f.stateID='".$stateIdFinal."'";
        }
        
        
        if($cityId=='')
        {
            $cityIdFinal="";
            $cityCond="";
        }
        else
        {
            $cityIdFinal=$cityId;
            $cityCond="and f.cityId='".$cityIdFinal."'";
            
        }
        $result=DB::select("SELECT f.id as ftoIdFInal,f.firstName,f.middleName,f.lastName,f.email,f.mobile,f.stateID,f.cityId,f.status,f.adminApproved,f.entryBy,f.createdAt,f.updatedAt
        , s.*,c.* from ftoregistration as f, states as s, cities as c where f.stateID=s.id and f.cityId=c.id  ".$stateCond." ".$cityCond."  ");
        return $result;
    }
    
    
    
}