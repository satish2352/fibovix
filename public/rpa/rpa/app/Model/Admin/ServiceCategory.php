<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class ServiceCategory extends Model
{
	protected $table='servicecategory';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}