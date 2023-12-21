<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class Advertise extends Model
{
	protected $table='advertise';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}