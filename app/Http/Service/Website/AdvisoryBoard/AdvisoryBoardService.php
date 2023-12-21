<?php
namespace App\Http\Service\Website\AdvisoryBoard;
use Illuminate\Http\Request;
use App\Http\Repository\Website\AdvisoryBoard\AdvisoryBoardRepository;
use session;
class AdvisoryBoardService
{
    public function __construct()
    {
    	$this->repository=new AdvisoryBoardRepository();
    }
    
    public function getAllAdvisoryBoardList()
    {
        $allAllAdvisoryBoardList=$this->repository->getAllAdvisoryBoardList();
        return $allAllAdvisoryBoardList;
    }
}