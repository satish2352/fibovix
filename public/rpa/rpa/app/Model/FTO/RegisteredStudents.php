<?php
namespace App\Model\FTO;
use Illuminate\Database\Eloquent\Model;
class RegisteredStudents extends Model
{
	protected $table='studentregistration';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}