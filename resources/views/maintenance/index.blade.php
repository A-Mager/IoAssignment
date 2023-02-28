@extends('layouts/app')
@section('content')
    <div class="container" style="margin-top: 4%">
        <table id="table" class="table display stripe" style="width:60%;">
                <thead style="background-color:#b51f38">
                <tr>
                    <th style="color:#ffffff">Date</th>
                    <th style="color:#ffffff">Job type</th>
                    <th style="color:#ffffff">Estimated time</th>
                    <th style="color:#ffffff">Car part</th>
                    <th style="color:#ffffff">Actions</th>
                    
                </tr>
                </thead>
                <tbody>

                <!-- Loop through each row retrieved and fill the datatable with it. Data is retrieved in App\Http\Controllers\JobController  -->
                @foreach ($data as $job)
                        <tr data-href="job/{{$job->id}}">
                            <td><a href="jobs/{{$job->id}}"><button class="button is-text is-small">{{$job->date}}</button></a></td>
                            <td><a href="jobs/{{$job->id}}"><button class="button is-text is-small">{{$job->jobType}}</button></a></td>
                            <td><a href="jobs/{{$job->id}}"><button class="button is-text is-small">{{$job->estimatedTime}}</button></a></td>
                            <td><button class="button is-white is-small" disabled>{{$job->carPart}}</button></td>
                            
                                <td>
                                    <div class="buttons are-small">
                                        <a href="job/{{$job->id}}/edit"><button class="button is-info">Edit</button></a>&nbsp;
                                        <a href="job/{{$job->id}}/delete" id="deleteReq"><button class="button is-danger">Resolved</button></a>
                                    </div>
                                </td>
                            
                        </tr>

                @endforeach

                </tbody>
            </table>
    </div>

@endsection

@push('scripts')
    
@endpush