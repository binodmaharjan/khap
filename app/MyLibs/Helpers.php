<?php
/**
 * Created by PhpStorm.
 * User: binod
 * Date: 7/2/17
 * Time: 6:17 PM
 */

namespace App\MyLibs;
use Illuminate\Support\Facades\Route;


use Carbon\Carbon;

class Helpers
{




    public static function miti($date){
        $cal = new Nepali_Calendar();
        $createdAt = Carbon::parse($date);
        return $cal->nc_date_in_nepali($createdAt->year,$createdAt->month,$createdAt->day);
    }

    public static function current_miti(){
        $cal = new Nepali_Calendar();
        $createdAt = Carbon::now();
        return $cal->nc_date_in_nepali($createdAt->year,$createdAt->month,$createdAt->day);
    }

    public static function miti_YY_mm_dd($date){
        $cal = new Nepali_Calendar();
        $createdAt = Carbon::parse($date);
        return $cal->nc_date_in_YY_mm_dd($createdAt->year,$createdAt->month,$createdAt->day);
    }

    public static function currentYear(){
        $cal = new Nepali_Calendar();
        return $cal->currentYear();
    }

    /*
|--------------------------------------------------------------------------
| Detect Active Route
|--------------------------------------------------------------------------
|
| Compare given route with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/
   public static function isActiveRoute($route, $output = "active")
    {
        if (Route::currentRouteName() == $route) return $output;
    }

    /*
    |--------------------------------------------------------------------------
    | Detect Active Routes
    |--------------------------------------------------------------------------
    |
    | Compare given routes with current route and return output if they match.
    | Very useful for navigation, marking if the link is active.
    |
    */
  public static  function areActiveRoutes(Array $routes, $output = "active")
    {
        foreach ($routes as $route)
        {
            if (Route::currentRouteName() == $route) return $output;
        }

    }

}