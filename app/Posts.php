<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Posts extends Model
{
    //
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
    ];
    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->slug = ($model->title);
        });
    }
    public function position()
    {
        
        return $this->BelongsTo(User::class,'user_id');
    }
}
