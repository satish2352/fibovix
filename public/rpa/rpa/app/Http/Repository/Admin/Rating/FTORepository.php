<?php
namespace App\Http\Repository\Admin\Rating;
use App\Model\FTO\FTOReg;
use DB;
class FTORepository
{
    public function getAllFTOsList()
    {
        $result = DB::select("SELECT f.id as ftoIdFInal,f.firstName,f.middleName,f.lastName,f.email,f.mobile,f.stateID,f.cityId,f.status,f.adminApproved,f.entryBy,f.createdAt,f.updatedAt,f.rating
        , s.*,c.* from ftoregistration as f, states as s, cities as c where f.stateID=s.id and f.cityId=c.id");
        return $result;
        
    }
    
    
    public function admFTORating($id,$data)
    {
        $result =DB::table('ftoregistration')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data); 
        
    }
    
}