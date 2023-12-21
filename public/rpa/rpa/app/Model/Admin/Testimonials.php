<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class Testimonials extends Model
{
	protected $table='testimonials';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}