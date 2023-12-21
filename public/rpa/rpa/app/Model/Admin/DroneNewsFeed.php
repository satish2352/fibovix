<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class DroneNewsFeed extends Model
{
	protected $table='DroneNewsFeed';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}