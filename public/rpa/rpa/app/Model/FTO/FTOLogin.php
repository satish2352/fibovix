<?php
namespace App\Model\FTO;
use Illuminate\Database\Eloquent\Model;
class FTOLogin extends Model
{
	protected $table='ftoregistration';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}