<?php
namespace App\Model\Website;
use Illuminate\Database\Eloquent\Model;
class Requestacallback extends Model
{
	protected $table='requestacallback';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}