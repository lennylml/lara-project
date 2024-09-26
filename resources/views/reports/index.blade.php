@extends('layouts.app')
@section('content')
<h3>Report List</h3>
@if(count($reports)>0)
<table class="table table-striped">
    <thead>
        <th>Report Title</th>
        <th>Report Description</th>
        <th class="container text-center">Report Priority</th>
        <th>Report Detail</th>
        <th>Edit Report</th>
        <th>Delete Report</th>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td class="col-4">{{$report->title}}</td>
            <td class="col-4">{{$report->description}}</td>
            <td class="container text-center">{{$report->priority}}</td>
            <td><a href="/reports/{{$report->id}}" class="btn btn-primary">Details</a></td>
            <td><a href="/reports/{{$report->id}}/edit"class="btn btn-secondary">Edit</a></td>
            <td><form action="/reports/{{$report->id}}"method="POST">
                @csrf
                @method('DELETE')<input type="submit" value="Delete"class="btn btn-danger" onclick="return confirm('Are you sure?')"></form></td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
No Data
@endif
@endsection