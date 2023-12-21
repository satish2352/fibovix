<?php
namespace App\Model\Pilot;
use Illuminate\Database\Eloquent\Model;
class VideoGallery extends Model
{
	protected $table='videogallery';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}