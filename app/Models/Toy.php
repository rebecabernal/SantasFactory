<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toy extends Model
{
    use HasFactory;

    public function kids(){
      return $this->belongsToMany(Kid::class, 'santa_list')->withTimestamps();}
}
