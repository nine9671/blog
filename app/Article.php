<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

//use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    //Modelo de clase Articles

    protected $table = "articles";

    protected $fillable = ['title','content','category_id','user_id'];


    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function images()
    {
    	return $this->hasMany('App\Image');
    }


    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    /*
     * Para que la ruta del articulo sea legible
    */
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function scopeSearch($query,$title)
    {
        return $query->where('title','LIKE','%'.$title.'%');
    }

    public static function findBySlugOrFail($slug, $columns = array('*') ) 
    { 
        if ( ! is_null($slug = static::whereSlug($slug)->first($columns))) { 
            return $slug; 
        } 
  
        throw new ModelNotFoundException; 
    } 
}


