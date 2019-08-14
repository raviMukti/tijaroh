<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    // Table Name
    protected $table = 'proposal';
    //Primary Key
    public $primariKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'keterangan', 'nominal', 'user_mitra_id', 'user_investor_id', 'produk', 'status',
    ];

    //Relationship One proposal has belong to one user
    public function user(){
        return $this->belongsTo('App\User', 'user_mitra_id');
    }
}
