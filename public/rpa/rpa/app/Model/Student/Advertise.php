<?php
namespace App\Model\FTO;
use Illuminate\Database\Eloquent\Model;
class Advertise extends Model
{
	protected $table='advertise';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}