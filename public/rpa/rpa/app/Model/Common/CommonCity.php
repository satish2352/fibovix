<?php
namespace App\Model\Common;
use Illuminate\Database\Eloquent\Model;

class CommonCity extends Model
{
	protected $table='cities';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}