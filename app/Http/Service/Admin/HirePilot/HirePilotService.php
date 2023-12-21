<?php
namespace App\Http\Service\Admin\HirePilot;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\HirePilot\HirePilotRepository;
use session;
class HirePilotService
{
    public function __construct()
    {
    	$this->repository=new HirePilotRepository();
    }
    
    public function getHirePilotList()
    {
        $hirePilotList=$this->repository->getHirePilotList();
        return $hirePilotList;
    }
    
    
}