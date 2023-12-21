<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class AdminLogin extends Model
{
	protected $table='admin';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}