<?php
namespace App\Http\Repository\Admin\HirePilot;
use DB;
class HirePilotRepository
{
    public function getHirePilotList()
    {
        return DB::Select("SELECT hirepilot.`id`, hirepilot.`pilotId`, hirepilot.`fullname`, hirepilot.`email`, hirepilot.`mobile`, hirepilot.`reason`, hirepilot.`details`,
        pilotregistration.`firstName`, pilotregistration.`middleName`, pilotregistration.`lastName`
        FROM `hirepilot` as hirepilot, pilotregistration as pilotregistration where hirepilot.`pilotId`=pilotregistration.`id` ");
    }
    
    
    
    
    
}