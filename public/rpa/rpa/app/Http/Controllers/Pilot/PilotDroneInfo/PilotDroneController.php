<?php
namespace App\Http\Controllers\Pilot\PilotDroneInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Common\CommonController;
use DB;
use session;
class PilotDroneController extends Controller
{
    
     public function index(Request $req)
     {
        //dd($req);
        $pilotId=session()->get('pilotId');
        $CategoryListNew=DB::select("select * from category");
    	if(isset($req->deleteOrEditDrone))
    	{
    	    

    		if($req->deleteOrEditDrone=='deleteDrone')
    		{
    			// for delete template
    			$id=$req->id;
    			return DB::delete(DB::raw("DELETE FROM `pilotrdroneinfo` WHERE `id`='".$id."' "));

    		}
    		if($req->deleteOrEditDrone=='editdrone')
    		{
    			// for edit template
    			$id=$req->id;
    			$openModal=1;
     			$allPilotDrone =DB::select(DB::raw("SELECT * FROM `pilotrdroneinfo` where pilotId='".$pilotId."'  "));
    			$allStateForEdit =DB::select(DB::raw("SELECT * FROM `pilotrdroneinfo` WHERE `id`='".$id."' "));
    			$allStateNew =DB::select(DB::raw("SELECT * FROM `pilotrdroneinfo` where pilotId='".$pilotId."'  "));
	        	return view('pilot/pilotdroneinfo/pilotdrone',compact('allPilotDrone','allStateForEdit','openModal','allStateNew'));

    		}
    	}

    	if(isset($req->editedOrFreshEntries))
    	{
    	    $category = explode('*', $req->category);
    		if($req->editedOrFreshEntries=='1')
	    	{
	    	    
	    	    $id=$req->id;
	    		
	    		$result=DB::update("UPDATE `pilotrdroneinfo` SET 
    	    	category='".$category[0]."', 
                uaopnumber='".$req->uaopnumber."', 
                uaopvalidity='".$req->uaopvalidity."',
                uinnumber='".$req->uin."', 
                uinvalidity='".$req->uinvalidity."', 
                npnt='".$req->npnt."', 
                droneSerialNumber='".$req->d_serial_no."', 
                danNumber='".$req->dan_no."',
                drnModelNum='".$req->drnModelNumber."', 
                droneMake='".$req->droneMake."', 
                drnManufacturarName='".$req->drnManufacturar."',
                insurance='".$req->insurance."',
                insVal='".$req->insVal."'
                WHERE  `pilotId`='".$pilotId."' and `id`='".$id."' ");
	    		
	    	}
	    	if($req->editedOrFreshEntries=='0')
	    	{
	    		$result=DB::insert("INSERT INTO `pilotrdroneinfo`( `pilotId`, `category`, `uaopnumber`,
	    		`uaopvalidity`, `uinnumber`, `uinvalidity`, `npnt`, `droneSerialNumber`, `danNumber`, `drnModelNum`,`droneMake`,
	    		`drnManufacturarName`, `insurance`, `insVal`) VALUES ('".$pilotId."','".$category[0]."','".$req->uaopnumber."',
	    		'".$req->uaopvalidity."','".$req->uin."','".$req->uinvalidity."','".$req->npnt."', '".$req->d_serial_no."', '".$req->dan_no."', '".$req->drnModelNumber."','".$req->droneMake."', 
	    		'".$req->drnManufacturar."','".$req->insurance."','".$req->insVal."'
	    		)");
	    	}
    	}
    	$allStateForEdit="";
	  	$allPilotDrone =DB::select(DB::raw("SELECT * FROM `pilotrdroneinfo` where pilotId='".$pilotId."'  "));
	   	$allStateNew =DB::select(DB::raw("SELECT * FROM `pilotrdroneinfo` where pilotId='".$pilotId."'  "));
    	$openModal=0;
        return view('pilot/pilotdroneinfo/pilotdrone',compact('allPilotDrone','allStateForEdit','openModal','allStateNew','CategoryListNew'));
    	
       
    }
    
    
	public function saveRegForm(Request $req)
    {
        $sentOtp=$this->generateOTP($req->mobile);
        $category = explode('*', $req->category);
        
            $data=array(
            
            'category'=>$category[0], //
            'uaopnumber'=>$req->uaopnumber, //
            'uaopvalidity'=>$req->uaopvalidity, //
            'uinnumber'=>$req->uin, //
            'uinvalidity'=>$req->uinvalidity, //
            'npnt'=>$req->npnt, //
            'droneSerialNumber'=>$req->d_serial_no, //
            'danNumber'=>$req->dan_no, //
            'drnModelNum'=>$req->drnModelNumber, //
            'drnManufacturarName'=>$req->drnManufacturar, //
            'insurance'=>$req->insurance, //
            'insVal'=>$req->insVal,//
            
            );
   
			PilotReg::insert($data);
    }	
 
	
}