<?php
namespace App\Model\Student;
use Illuminate\Database\Eloquent\Model;
class StudentLogin extends Model
{
	protected $table='studentregistration';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}