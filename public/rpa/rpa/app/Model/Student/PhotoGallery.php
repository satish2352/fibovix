<?php
namespace App\Model\FTO;
use Illuminate\Database\Eloquent\Model;
class PhotoGallery extends Model
{
	protected $table='photogallery';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}