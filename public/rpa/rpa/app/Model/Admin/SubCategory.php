<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class SubCategory extends Model
{
	protected $table='subcategory';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}