<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=[
        'contact_id','image'
    ];

    public function contact(){
       return $this->belongsTo(Contact::class);
    }
}
