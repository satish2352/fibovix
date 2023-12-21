<?php
namespace App\Http\Repository\Website\DGCSPressRelease;
use App\Model\Website\DGCSPressRelease;
use DB;
class DGCSPressReleaseRepository
{
    public function getDGCSPressReleaseList()
    {
        $result = DB::select("SELECT `id`, `whoseDGCAPressRelease`, `DGCAPressReleaseBy`, `title`, `content`, `pdf`, `status`, `createdOn`, `adminStatus`, `createdAt`, `updatedAt` FROM `DGCAPressRelease` where `status`='1' && `adminStatus`='1' ");

        return $result;
        
    }
}