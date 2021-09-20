<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    //One to many relationship between contacts model and tasks model
    public function tasks(){

    return $this->hasMany(Tasks::class);

    }

    //Many to one relationship between contacts and accounts model
    public function accounts(){

        return $this->belongsTo(Accounts::class);
    
    }

    //One to many relationship between contacts and deals model
    public function deals(){

        return $this->hasMany(Deals::class);
    
        }
}
