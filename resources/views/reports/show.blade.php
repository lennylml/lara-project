@extends('layouts.app')
@section('content')
<h3>Report Detail with Priority Level: <span class="badge text-bg-secondary">{{$report->priority}}</span></h3>
<div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
    <h4>
    Report Title :{{$report->title}} <br>
    Report Description : {{$report->description}}<br>
    </h4>
</div><br>
<div class="p-3 text-light-emphasis bg-info-subtle border border-info-subtle rounded-3">
<small>Created at : {{$report->created_at}}<br>
    Updated at : {{$report->updated_at}} <br>
</div>
@endsection