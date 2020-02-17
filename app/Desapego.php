<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use File;


class Desapego extends Model{

    // use Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable =
        ['descriptionProduct', 'priceProduct', 'withdrawalState', 'withdrawalCity', 'withdrawalNeighborhood', 'image','phone','user_id', 'user_name'];
        protected $guarded = ['id', 'created_at', 'update_at'];
        protected $table = 'desapego_produtos';

        
        public function user(){
            return $this->belongsTo('App\User');
            // para vincular a criacao do produto ao id do usuario que o cadastrou.
        }
    
    
    }

