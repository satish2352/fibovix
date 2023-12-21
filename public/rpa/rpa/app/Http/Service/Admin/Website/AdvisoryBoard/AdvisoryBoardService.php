<?php
namespace App\Http\Service\Admin\Website\AdvisoryBoard;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\Website\AdvisoryBoard\AdvisoryBoardRepository;
use session;
class AdvisoryBoardService
{
    public function __construct()
    {
    	$this->repository=new AdvisoryBoardRepository();
    }
    
    public function getAllAdvisoryBoardList($id)
    {
        $allAdvisoryBoard=$this->repository->getAllAdvisoryBoardList($id);
        return $allAdvisoryBoard;
    }
    
    
    
    
    
    
    public function saveAdvisoryBoardForm($req)
    {
        // Course Image Code
        $AdvisoryBoardImage=public_path()."/asset/AdvisoryBoard/Image";
          if ( !is_dir( $AdvisoryBoardImage) ) 
          {
            mkdir( $AdvisoryBoardImage );       
          }
          
          if (!empty($req->image))
          {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move($AdvisoryBoardImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
            
            $AdvisoryBoarddata=array(
            'name'=>$req->name,
            'designation'=>$req->designation,
            'title'=>$req->advTitle,
            'content'=>$req->advContent,
            'image'=>$imageName,
            'status'=>1,
            'adminStatus'=>1
            );
            
            
           $dataOfAdvisoryBoard=$this->repository->saveadvisoryboardForm($AdvisoryBoarddata);
    }
    
    
    
    
    
    
    
    
    
    public function approveAdvisoryBoard($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allAdvisoryBoard=$this->repository->approveAdvisoryBoard($id,$data);
        return $allAdvisoryBoard;
    }
    
    
    public function approveAdvisoryBoardbyadmin($id,$setApproval)
    {
        $data=array(
                'adminStatus'=>$setApproval
            );
        $allAdvisoryBoard=$this->repository->approveAdvisoryBoardbyadmin($id,$data);
        return $allAdvisoryBoard;
    }
    
    
    
    
    
}