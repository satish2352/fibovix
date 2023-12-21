<?php
namespace App\Model\Website;
use Illuminate\Database\Eloquent\Model;
class AdvisoryBoard extends Model
{
	protected $table='websiteadvisoryboard';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}