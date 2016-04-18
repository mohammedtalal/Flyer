<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Flyer extends Model
{
	/**
    *Fillable field for a Flyer
    *
    *@var array
    */
    protected $table = 'flyers';
	protected $fillable = [
		'street',
		'city',
		'state',
		'country',
		'zip',
		'price',
		'description' ,
	];
    /**
     * Find the flyer at the given address.
     *
     *@param string   $zip
     *@param string   $street
     *@return [type]
     */
     public static function LocatedAt($zip, $street) {
         $street = str_replace('-',' ',$street);
         return static::where(compact('zip', 'street'))->first();
     }

     // this method to get flyer price
    public function getPriceAttribute($price) {
        return '$' . number_format($price);
    }

    public function addPhoto(Photo $photo){
        return $this->photos()->save($photo);
    }


    /**
    *A Flyer is composed of many photos
    *@return \Illuminate\Database\Eloquent\Relations\HasMany;
    */
    public function photos() {

    	return $this->hasMany('App\Photo');
    }
}
