<?php
namespace App\Model\Common;
use Illuminate\Database\Eloquent\Model;
class AdminState extends Model
{
	protected $table='statebyadmin';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}

