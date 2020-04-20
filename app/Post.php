<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $primaryKey = 'post_id';
    protected $fillable = ['post_title','post_text','post_price','user_id','category_id','country_id'];

    public function images()
    {
        return $this->hasMany('App\Image', 'post_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function country()
    {
        return $this->belongsTo('App\Country','country_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }

    public function delete()
    {
        $this->images()->delete();
        return parent::delete();
    }

}
