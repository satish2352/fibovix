<?php
namespace App\Model\Common;
use Illuminate\Database\Eloquent\Model;
class AdminCity extends Model
{
	protected $table='citybyadmin';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}

