<?php
namespace App\Http\Service\FTO\TPM;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\TPM\TPMRepository;
use session;
class TPMService
{
    public function __construct()
    {
    	$this->repository=new TPMRepository();
    }
    
    public function getAllTPMList($id)
    {
        $allTPM=$this->repository->getAllTPMList($id);
        return $allTPM;
    }
    
    
    
    
    
    
    public function saveTPMForm($req)
    {
      
        $TPMImage=public_path()."/asset/TPM/Pdf";
          if ( !is_dir( $TPMImage) ) 
          {
            mkdir( $TPMImage );       
          }
          
          if (!empty($req->pdf))
          {
            $imageName = time().'.'.request()->pdf->getClientOriginalExtension();
            request()->pdf->move($TPMImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
            $cDate = date('d F Y');
            $tpmdata=array(
            'whosetpm'=>session()->get('ftoId'),
            'title'=>$req->adsTitle,
            'content'=>$req->adsContent,
            'tpmBy'=>1,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'pdf'=>$imageName,
            'createdOn'=>$cDate,
            'status'=>1,
            'adminStatus'=>0
            );
            
          
           $dataOfTPM=$this->repository->savetpmForm($tpmdata);
    }
    
    
    
    
    
    
    
    
    
    public function approveTPM($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allTPM=$this->repository->approveTPM($id,$data);
        return $allTPM;
    }
    
    
    
    
    
}