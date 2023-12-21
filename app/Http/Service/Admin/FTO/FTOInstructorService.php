<?php
namespace App\Http\Service\Admin\FTO;
use Illuminate\Database\QueryException;
use App\Http\Repository\Admin\FTO\FTOInstructorRepository;


class FTOInstructorService
{

    public function __construct()
    {        
        $this->repo = new FTOInstructorRepository();
    }

    public function getAllInstructorList($ftoInstructorId)
    {
    	return $this->repo->getAllInstructorList($ftoInstructorId);
    }
    
    public function getAllInstructorListUderFTO($id)
    {
    	return $this->repo->getAllInstructorListUderFTO($id);
    }

    public function deleteState($ftoInstructorId)
    {
    	return $this->repo->deleteState($ftoInstructorId);
    }
    
    public function addNewInstructor($instrctorName,$underFTO)
    {
    	return $this->repo->addNewInstructor($instrctorName,$underFTO);
    }

    public function updateState($instructorName,$ftoInstructorId,$underFTO)
    {
    	return $this->repo->updateState($instructorName,$ftoInstructorId,$underFTO);
    }
    
    

    
}