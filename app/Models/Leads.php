<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    use HasFactory;

  
    //One to many relationship of leads model to tasks model
    public function tasks(){

        return $this->hasMany(Tasks::class);
    }
}
