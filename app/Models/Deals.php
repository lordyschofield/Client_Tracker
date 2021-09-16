<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deals extends Model
{
    use HasFactory;
    

    // One to many relationship between deals and tasks model
    public function deals_tasks(){
        return $this->hasMany(Tasks::class);

    }

    //Many to one relationship between deals and accounts model
    public function deals_accounts(){

    return $this->belongsTo(Accounts::class);

    }

    //Many to one relationship between deals and contacts model
    public function deals_contacts(){

    return $this->belongsTo(Contacts::class);

    }
    
}
