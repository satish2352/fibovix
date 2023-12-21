<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class State extends Model
{
	protected $table='statebyadmin';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}