<?php
namespace App\Http\Service\Admin\DGCAPressRelease;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\DGCAPressRelease\DGCAPressReleaseRepository;
use session;
class DGCAPressReleaseService
{
    public function __construct()
    {
    	$this->repository=new DGCAPressReleaseRepository();
    }
    
    public function getAllDGCAPressReleaseList($id)
    {
        $allDGCAPressRelease=$this->repository->getAllDGCAPressReleaseList($id);
        return $allDGCAPressRelease;
    }
    
    
    
    
    
    
    public function saveDGCAPressReleaseForm($req)
    {
        // Course Image Code
        $DGCAPressReleaseImage=public_path()."/asset/DGCAPressRelease/Pdf";
          if ( !is_dir( $DGCAPressReleaseImage) ) 
          {
            mkdir( $DGCAPressReleaseImage );       
          }
          
          if (!empty($req->pdf))
          {
            $imageName = time().'.'.request()->pdf->getClientOriginalExtension();
            request()->pdf->move($DGCAPressReleaseImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
            $cDate = date('d F Y');
            $DGCAPressReleasedata=array(
            'whoseDGCAPressRelease'=>session()->get('adminId'),
            'title'=>$req->adsTitle,
            'content'=>$req->adsContent,
            'DGCAPressReleaseBy'=>2,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'pdf'=>$imageName,
            'createdOn'=>$cDate,
            'status'=>1,
            'adminStatus'=>1
            );
            
            
           $dataOfDGCAPressRelease=$this->repository->saveDGCAPressReleaseForm($DGCAPressReleasedata);
    }
    
    
    
    
    
    
    
    
    
    public function approveDGCAPressRelease($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allDGCAPressRelease=$this->repository->approveDGCAPressRelease($id,$data);
        return $allDGCAPressRelease;
    }
    
    
    public function approveDGCAPressReleasebyadmin($id,$setApproval)
    {
        $data=array(
                'adminStatus'=>$setApproval
            );
        $allDGCAPressRelease=$this->repository->approveDGCAPressReleasebyadmin($id,$data);
        return $allDGCAPressRelease;
    }
    
    
    
    
    
}