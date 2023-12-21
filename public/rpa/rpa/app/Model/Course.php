<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class Course extends Model
{
	protected $table='courses';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}