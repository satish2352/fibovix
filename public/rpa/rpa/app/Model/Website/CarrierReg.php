<?php
namespace App\Model\Website;
use Illuminate\Database\Eloquent\Model;
class CarrierReg extends Model
{
	protected $table='carrier';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=['name', 'email', 'mobile', 'cv', 'position'];
}
