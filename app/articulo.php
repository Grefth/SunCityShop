<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    protected $table = "articulos";

    protected $fillable = ['id','categoria_id','color','stock','talla','modelo','created_at','updated_at'];


    //relaciones de tablas 
    public function categoria(){

    	return $this->belongsTo('App/categoria');
    }
}
