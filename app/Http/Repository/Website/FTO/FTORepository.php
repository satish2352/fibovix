<?php
namespace App\Http\Repository\Website\FTO;
use App\Model\FTO\FTOReg;
use DB;
class FTORepository
{
    public function getAllFTOsList()
    {
        $result = DB::select("SELECT f.id as ftoIdFInal,f.firstName,f.middleName,f.FTOLogo,f.FTOName,f.description  ,f.lastName,f.email,f.mobile,f.stateID,f.cityId,f.status,f.adminApproved,f.entryBy,f.createdAt,f.updatedAt
        , s.*,c.* from ftoregistration as f, states as s, cities as c where f.stateID=s.id and f.cityId=c.id and f.adminApproved='1' ");
        
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
        $result=DB::select("SELECT f.id as ftoIdFInal,f.FTOName,f.FTOLogo,f.description,f.firstName,f.middleName,f.lastName,f.email,f.address1,f.address2,f.address3,f.pinCode,f.mobile,f.stateID,f.cityId,f.status,f.adminApproved,f.entryBy,f.createdAt,f.updatedAt
        , s.*,c.* from ftoregistration as f, states as s, cities as c where f.stateID=s.id and f.cityId=c.id and f.adminApproved='1'  ".$stateCond." ".$cityCond."  ");
        return $result;
    }
    
    
    public function getAllFTOsAdvertise()
    {
        $result = DB::select("SELECT `id`, `whoadvertising`, `advertiseBy`, `title`, `content`, `image`, `fromDate`, `toDate`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `advertise` where advertiseBy='2' and status='1' and adminStatus='1' ");
        
        return $result;
        
    }
}