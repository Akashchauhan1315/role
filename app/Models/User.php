<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;
use Hash;

use App\Traits\Google;

class User extends Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable,HasRoles,Google;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password','phone','is_email','is_phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function book(){

        return $this->hasMany(Book::class);
    }

    public function store(){

        return $this->hasOne(Shop::class);
    }

    public function roles(){

        return $this->belongsToMany(Role::class,'users_roles');
    }

    public function getRole($userid){

        return null !== $this->roles()->where(['name'=>'user','user_id'=>$userid])->first();
    }

    public function getVendorRole(){

        return null !== $this->roles()->where(['name'=>'vendor'])->get();
    }

    public static function SignupProcess($request){

        try{

            $Userarray=array(

                'name' => encrypt($request->first_name),

                'email' => $request->email,

                'password' => Hash::make($request->password),
            );

            $user = User::create($Userarray);

            $user['token'] =  $user->createToken('angular')->accessToken;

            $role = Role::where('name',$request->type)->first();
                
            if($role){

                $user->roles()->attach($role);

            }
            return $user;

        }catch(\Expection $e){

            return response(['success' => 0,'statuscode' => 400,'message' => $e->getMessage()],400);
        }

        
    }
}
