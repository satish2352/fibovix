<?php
namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
class TPM extends Model
{
	protected $table='tpm';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=[];
}