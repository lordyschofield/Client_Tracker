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
    
    //One to Many relationship between accounts model and tasks model
    public function accounts_tasks(){

        return $this->hasMany(Tasks::class);


    }

    
}
