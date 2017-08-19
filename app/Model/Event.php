<?php

namespace App\Model;

use App\Extensions\SearchableTrait;
use Illuminate\Support\Facades\DB;

class Event extends Elegant
{
    protected $fillable = [
        'titlu',
        'user_id',
        'continut',
    ];

    protected $dates = ['created_at', 'updated_at', ];

    public function user()
    {
        return $this->belongsTo('App\User', "user_id");
    }

    /*public function views()
    {
        return $this->hasMany('App\Model\OfferView', "offer_id", "id");
    }
  */
    public function getAll()
    {
        $query = parent::getAll()
            ->addSelect('users.name as autor')
            ->join('users','users.id','=','posts.user_id');


        return $query;
    }

    public function getById($id)
    {
        $query =  parent::getById($id)
            ->addSelect('users.name as autor')
            ->join('users','users.id','=','posts.user_id');

        return $query;

    }

}
