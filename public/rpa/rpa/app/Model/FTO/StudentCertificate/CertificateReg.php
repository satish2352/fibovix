<?php
namespace App\Model\Certificate;
use Illuminate\Database\Eloquent\Model;
class CertificateReg extends Model
{
	protected $table='certificatenumber';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}
