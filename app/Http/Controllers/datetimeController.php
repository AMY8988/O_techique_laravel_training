<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class datetimeController extends Controller
{
    public function datetime(){
        date_default_timezone_set('Asia/Yangon');
        $startDate = Carbon::createFromFormat('Y-m-d H:i', '2021-5-8 15:00');
        $current_date = now()->format('H:i');



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

    }
}
