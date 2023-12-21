<?php
namespace App\Model\FTO;
use Illuminate\Database\Eloquent\Model;
class TPM extends Model
{
	protected $table='tpm';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}