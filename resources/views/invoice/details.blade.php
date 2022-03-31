@extends('adminlte::page')

@section('title', 'Buyers')

@section('content_header')
    <h1>Invoice</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $invoice->invoice_num}}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Price</dt>
            <dd class="col-sm-9">{{ $invoice->specs }}</dd>

            <dt class="col-sm-3">Purchase Date</dt>
            <dd class="col-sm-9">{{ $invoice->purchase_date }}</dd>

            <dt class="col-sm-3">Equipment ID</dt>
            <dd class="col-sm-9">{{ $invoice->equipment_id }}</dd>

            <dt class="col-sm-3">Customer ID</dt>
            <dd class="col-sm-9">{{ $invoice->customer_id }}</dd>
        </dl>
    </div>
@stop
