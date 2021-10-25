<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use DB;

class Property extends Model
{
    use HasFactory;

    public static function GoogleAddress($request){

        $cities = self::select(DB::raw('*, ( 6367 * acos( cos( radians(' . $request->latitude . ') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(' . $request->longitude . ') ) + sin( radians(' . $request->latitude . ') ) * sin( radians( latitude ) ) ) ) AS distance'))
                    ->having('distance', '<', 10000)
                    ->orderBy('distance')
                    ->get();

        return response()->json($cities);
    }
}
