<?php
namespace App\Http\Service\Website\Carrier;
use Illuminate\Http\Request;
use App\Http\Repository\Website\Carrier\CarrierRepository;
use session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
class CarrierService
{
    public function __construct()
    {
    	$this->repository=new CarrierRepository();
    }
        
    public function carrierSave($req)
    {
        
        $cv=public_path()."/asset/carrier";
          if ( !is_dir( $cv) ) 
          {
            mkdir( $cv );       
          }
          
          if (!empty($req->cv))
          {
            $imageName = time().'.'.request()->cv->getClientOriginalExtension();
            request()->cv->move($cv, $imageName);
          }
          else
          {
              $imageName='';
          }




            $data=array(
                  'name' => $req->input('name'),
                  'email' => $req->input('email'),
                  'mobile' => $req->input('mobile'),
                  'cv' => $imageName,
                  'position' => $req->input('position')
                );
           
        $result=$this->repository->carrierSave($data);
        
    }

   
}