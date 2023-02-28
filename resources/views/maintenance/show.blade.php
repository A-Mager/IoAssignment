@extends('layouts/app')
@section('content')
    <div class="container page-content" style="margin-top: 4%">
        <div class="tile is-ancestor">
            <div class="tile is-horizontal">
                <div class="tile is-parent">
                    <div class="tile is-child box">
                        <h1 class="title is-2">Maintenance details</h1>
                        <h1 class="title is-5">Date: {{$day}}, {{$data->date}}</h1>
                        <h1 class="title is-5">Maintenance type: {{$data->jobType}}</h1>
                        <h1 class="title is-5">Estimated time in hours: {{$data->estimatedTime}}</h1>
                        <h1 class="title is-5">Replacement part (optional): {{$data->carPart}}</h1>
                        <h1 class="title is-5">Costs:</h1>
                        <p>
                            Hourly rate: €{{$hourly_rate}} x {{$data->estimatedTime}} = €{{$total_hourly_rate}}<br>
                            Part price: €{{$part_price}}<br>
                            Total price excl. tax: €{{$before_tax}}<br>
                            Tax rate: 21%<br>
                            Total price incl. tax: €{{$after_tax}}
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')

@endsection
<!-- 'data' => $data,
            'day' => $day, 
            'hourly_rate' => $hourly_rate, 
            'total_hourly_rate' => $total_hourly_rate,
            'part_price' => $part_price,
            'before_tax' => $price_before_tax,
            'after_tax' => $price_after_tax -->