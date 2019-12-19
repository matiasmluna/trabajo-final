<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
use DB;

class Product extends Model
{
    // public $table = "products";
    // public $id = "id";
    // public $timestamps = false;
    public $guarded = [];

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
