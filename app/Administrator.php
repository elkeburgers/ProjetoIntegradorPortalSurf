<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $table = 'administrators';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
