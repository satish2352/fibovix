<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class AdvisoryBoard extends Model
{
	protected $table='websiteadvisoryboard';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}