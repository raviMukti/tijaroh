<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    // Table Name
    protected $table = 'proposal';
    //Primary Key
    public $primariKey = 'id';

    //Relationship One proposal has belong to one user
    public function user(){
        return $this->belongsTo('App\User');
    }
}
