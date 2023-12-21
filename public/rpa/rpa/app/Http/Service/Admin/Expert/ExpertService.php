<?php
namespace App\Http\Service\Admin\Expert;
use Illuminate\Database\QueryException;
use App\Http\Repository\Admin\Expert\ExpertRepository;


class ExpertService
{

    public function __construct()
    {        
        $this->repo = new ExpertRepository();
    }

    public function getAllState($stateId)
    {
    	return $this->repo->getAllState($stateId);
    }

    public function deleteState($stateId)
    {
    	return $this->repo->deleteState($stateId);
    }
    
    public function addNewState($firstName1,$middleName1,$lastName1,$email1,$mobile1,$proffession1,$address1,$passportPhoto1)
    {
    	return $this->repo->addNewState($firstName1,$middleName1,$lastName1,$email1,$mobile1,$proffession1,$address1,$passportPhoto1);
    }

    public function updateState($firstName1,$middleName1,$lastName1,$email1,$mobile1,$proffession1,$address1,$passportPhoto1,$stateId)
    {
    	return $this->repo->updateState($firstName1,$middleName1,$lastName1,$email1,$mobile1,$proffession1,$address1,$passportPhoto1,$stateId);
    }
}