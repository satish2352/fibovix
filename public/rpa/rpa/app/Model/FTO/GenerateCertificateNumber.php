<?php
namespace App\Model\FTO;
use Illuminate\Database\Eloquent\Model;
class GenerateCertificateNumber extends Model
{
	protected $table='certificatenumber';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}