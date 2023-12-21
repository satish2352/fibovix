<?php
namespace App\Model\Common;
use Illuminate\Database\Eloquent\Model;
class CommonState extends Model
{
	protected $table='states';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}

