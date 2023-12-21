<?php
namespace App\Http\Service\Website\DGCSPressRelease;
use Illuminate\Http\Request;
use App\Http\Repository\Website\DGCSPressRelease\DGCSPressReleaseRepository;
use session;
class DGCSPressReleaseService
{
    public function __construct()
    {
    	$this->repository=new DGCSPressReleaseRepository();
    }
    
    public function getDGCSPressReleaseList()
    {
        $allDGCSPressReleaseList=$this->repository->getDGCSPressReleaseList();
        return $allDGCSPressReleaseList;
    }
}