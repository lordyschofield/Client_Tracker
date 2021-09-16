<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    
   
    // Many to one relationship of tasks to leads
    public function leads(){

        return $this->belongsTo(Leads::class);

    }


    //Many to one relationship of tasks to accounts
    public function accounts(){

        return $this->belongsTo(Accounts::class);

    }


    //Many to one relationship of tasks to deals
    public function deals(){

        return $this->belongsTo(Accounts::class);

    }


    //Many to one relationship of tasks to contacts
    public function contacts(){

        return $this->belongsTo(Accounts::class);

    }





}
