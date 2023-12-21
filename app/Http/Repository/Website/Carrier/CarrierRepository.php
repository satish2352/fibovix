<?php
namespace App\Http\Repository\Website\Carrier;
use Illuminate\Http\Request;
use App\Model\Website\CarrierReg;
use DB;
class CarrierRepository

{
    public function carrierSave($data)
    {
    	return CarrierReg::insert($data);
    }
}