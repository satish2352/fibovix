<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class ExpertReg extends Model
{
	protected $table='addexpert';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[`firstName`,`middleName`,`lastName`,`email`,`mobile`,`proffession`,`address`,`passportPhoto`];
}