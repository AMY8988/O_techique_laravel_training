<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function getCreatedAtAttribute($value)
    {

        

        $startDate = Carbon::createFromDate($value);
        $current_date = Carbon::now();




        $dateDiff = $startDate->diffInRealSeconds($current_date);
        if($dateDiff >= 60){
            $dateDiff = $startDate->diffInRealMinutes($current_date);
            if($dateDiff > 60){
                $dateDiff = $startDate->diffInRealHours($current_date);
                if($dateDiff > 24){
                    $dateDiff = $startDate->diffInDays($current_date);
                    if($dateDiff > 365){
                        $dateDiff = $startDate->diffInYears($current_date);
                    return "$dateDiff years ago";
                    }
                    return "$dateDiff days ago";
                }
                return "$dateDiff hr ago";
            }
            return "$dateDiff min ago";
        }
        return "$dateDiff sec ago";
        // return strtoupper($value);
    }


}
