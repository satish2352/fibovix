<?php
namespace App\Http\Repository\Admin\Expert;
use Illuminate\Database\QueryException;
use App\Model\Admin\ExpertReg;
use DB;
class ExpertRepository
{
	public function getAllState($categoryId)
    {
    	if($categoryId !='')
    	{
    		$expertCondition="WHERE `id`='".$categoryId."'";
    	}
    	else
    	{
    		$expertCondition="";
    	}
    	return DB::Select("SELECT `id`, `firstName`, `middleName`, `lastName`, `email`, `mobile`, `proffession`, `address`, `passportPhoto`,`status` FROM `addexpert` ".$expertCondition." ");
    }

    public function deleteState($categoryId)
    {
    	return DB::delete("DELETE FROM `addexpert` WHERE `id`=".$categoryId." ");
    }

    public function addNewState($firstName1,$middleName1,$lastName1,$email1,$mobile1,$proffession1,$address1,$passportPhoto1)
    {
        
        $passportPhoto=public_path()."/asset/expert";
          if ( !is_dir( $passportPhoto) ) 
          {
            mkdir( $passportPhoto );       
          }
          
          if (!empty($req->passportPhoto))
          {
            $imageName = time().'.'.request()->passportPhoto->getClientOriginalExtension();
            request()->passportPhoto->move($passportPhoto, $imageName);
          }
          else
          {
              $imageName='';
          }

    	return DB::insert("INSERT INTO `addexpert`(`firstName`,`middleName`,`lastName`,`email`,`mobile`,`proffession`,`address`,`passportPhoto`) VALUES ('".$firstName1."','".$middleName1."','".$lastName1."','".$email1."','".$mobile1."','".$proffession1."','".$address1."','".$imageName."') ");
    }

    public function updateState($firstName1,$middleName1,$lastName1,$email1,$mobile1,$proffession1,$address1,$passportPhoto1,$categoryId)
    {
    	return DB::update("UPDATE `addexpert` SET `firstName`='".$firstName1."',`middleName`='".$middleName1."',`lastName`='".$lastName1."',`email`='".$email1."',`mobile`='".$mobile1."',`proffession`='".$proffession1."',`address`='".$address1."',`passportPhoto`='".$passportPhoto1."'  WHERE `id`='".$categoryId."'");
    }
}