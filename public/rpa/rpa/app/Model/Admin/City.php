<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class City extends Model
{
	protected $table='citybyadmin';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}