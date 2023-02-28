<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

class JobController extends Controller
{
    /**
     * Retrieve the stored maintenance jobs
     *
     * @return \Illuminate\Http\Response
     */

    //Retrieve all the data in the table and pass it to the index.blade. There it will be filled out into the datatable.
    public function index()
    {
        $table = DB::table('scheduled_maintenance_jobs')->select('id','date', 'jobType', 'estimatedTime', 'carPart')->get();

        return view('maintenance/index', ['data' => $table]);
    }

    //Retrieve the specified row of data. This function will calculate the price and pass that to the view as well as the normal maintenance job details.
    public function show($id)
    {
        $data =  DB::table('scheduled_maintenance_jobs')->where('id', $id)->first();

        //Calculate hourly rate based on week day(workday or weekend, weekend has 40% increased rates) and based on the maintenance type.
        $day = date('l', strtotime($data->date));

        if($day == 'Saturday' || $day == 'Sunday'){
            if($data->jobType == 'Maintenance'){
                $hourly_rate = 98;
            }
            elseif($data->jobType == 'Part replacement'){
                $hourly_rate = 140;
            }
            else{
                $hourly_rate = 126;
            }
        }

        else{
            if($data->jobType == 'Maintenance'){
                $hourly_rate = 70;
            }
            elseif($data->jobType == 'Part replacement'){
                $hourly_rate = 100;
            }
            else{
                $hourly_rate = 90;
            }
        }

        $total_hourly_rate = $data->estimatedTime * $hourly_rate;
        
        //Get spare part price if job type = Part replacement. $part_price will have a value of 0 if no spare part is relevant to the job type.
        $part_price = 0;

        if($data->jobType == 'Part replacement'){
            $temp_part_price = DB::table('spare_parts')->select('price')->where('partType', $data->carPart)->first();
            $part_price = $temp_part_price->price;
        }

        //Add the price of the hourly rates + any part costs. This makes the total price before tax. 
        //Afterwards the price will be calculated with tax at a rate of 21%. This is in line with the normal taxation rates in The Netherlands

        $price_before_tax = $total_hourly_rate + $part_price;
        $price_after_tax = $price_before_tax * 1.21;

        // dd($data, $day, $hourly_rate, $total_hourly_rate, $part_price, $price_before_tax,  $price_after_tax);

        //Return all data to the show.blade. There it will be used with blade syntax
        return view('maintenance/show', [
            'data' => $data,
            'day' => $day, 
            'hourly_rate' => $hourly_rate, 
            'total_hourly_rate' => $total_hourly_rate,
            'part_price' => $part_price,
            'before_tax' => $price_before_tax,
            'after_tax' => $price_after_tax
        ]);
    }

}