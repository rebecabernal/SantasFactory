<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kid extends Model

{
    use HasFactory;

    public function toys(){
        return $this->belongsToMany(Toy::class, 'santa_list')->withTimestamps();}
}

