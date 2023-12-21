<?php
namespace App\Model\FTO;
use Illuminate\Database\Eloquent\Model;
class Event extends Model
{
	protected $table='events';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}