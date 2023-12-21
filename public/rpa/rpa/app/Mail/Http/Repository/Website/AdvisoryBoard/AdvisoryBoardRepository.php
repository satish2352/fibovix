<?php
namespace App\Http\Repository\Website\AdvisoryBoard;
use App\Model\Website\AdvisoryBoard;
use DB;
class AdvisoryBoardRepository
{
    public function getAllAdvisoryBoardList()
    {
        $result = DB::select("SELECT `id`, `name`, `designation`, `title`, `content`, `image`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `websiteadvisoryboard`");

        return $result;
        
    }
}