<?php
namespace App\Model\Content;
use Illuminate\Database\Eloquent\Model;
class ContentReg extends Model
{
	protected $table='bondcontent';
    protected $primeryKey='id';
    public $timestamps=false;
    protected $fillable=['id','bondContent'];
}
