@extends('adminlte::page')

@section('title', 'Customer')

@section('content_header')
    <h1>Customer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $customer->full_name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Phone Number</dt>
            <dd class="col-sm-9">{{ $customer->phone_number }}</dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $customer->email }}</dd>
        </dl>
    </div>
    <span style="float:right; margin-bottom: 10px;">
      <a href="{{ route('customer.destroy' ,['customer'=> $customer->id])}}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">Delete</a>
    </span>
@stop
