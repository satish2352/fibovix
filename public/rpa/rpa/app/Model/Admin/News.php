<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class News extends Model
{
	protected $table='news';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}