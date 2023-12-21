<?php
namespace App\Model\Pilot;
use Illuminate\Database\Eloquent\Model;
class PilotLogin extends Model
{
	protected $table='pilotregistration';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}