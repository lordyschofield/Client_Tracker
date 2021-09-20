<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [ 'id','company_name'
        ];
    
    //One to Many relationship between accounts and tasks model
    public function tasks(){

        return $this->hasMany(Tasks::class);


    }

    //One to many relationship between accounts and deals model
    public function deals(){

        return $this->hasMany(Deals::class);


    }
    //One to many relationship between accounts and contacts model
    public function contacts(){

        return $this->hasMany(Contacts::class);


    }




}
