<?php
namespace App\Model\FTO;
use Illuminate\Database\Eloquent\Model;
class News extends Model
{
	protected $table='news';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}