<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Item_categorie extends Model
{

    protected $fillable = ['name', 'color'];
    // public $timestamps = false;
    //
    public function items(){
      return $this->hasMany('App\Item');
    }
}
