<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class PhotoGallery extends Model
{
	protected $table='photogallery';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}