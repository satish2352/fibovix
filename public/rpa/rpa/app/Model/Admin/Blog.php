<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class Blog extends Model
{
	protected $table='blog';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}