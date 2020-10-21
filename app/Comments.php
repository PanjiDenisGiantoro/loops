<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $fillable = [
        'post_id',
        'name',
        'email',
        'website',
        'comment',
    ];
    public function cm(){
        return $this->belongsToMany(User::class,'posts');
      }
}
