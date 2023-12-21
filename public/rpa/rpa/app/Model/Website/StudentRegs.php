<?php
namespace App\Model\Website;
use Illuminate\Database\Eloquent\Model;
class StudentRegs extends Model
{
	protected $table='studentregistration';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=['firstName','middleName','lastName','email','password','mobile','stateId','cityId','ftoId','profession','adharNumber','addressProof','passportPhoto','aadharFront','aadharBack','experience'];
}