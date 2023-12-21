<?php
namespace App\Model\FTO;
use Illuminate\Database\Eloquent\Model;
class Achievement extends Model
{
	protected $table='achievement';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}