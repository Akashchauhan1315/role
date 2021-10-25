<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shop_name','url','country','address','user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }


    public static function CreateAccount($request){

    	self::create([

    		'shop_name' => $request->shop_name,

    		'url' => $request->url,

    		'country' => $request->country,

    		'address' => $request->address,

    		'user_id' => $request->user_id,

    	]);
    }
}
