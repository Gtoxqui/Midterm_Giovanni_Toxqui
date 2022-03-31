@extends('adminlte::page')

@section('title', 'Buyers')

@section('content_header')
    <h1>Manufacturers</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $equipment->name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Specs</dt>
            <dd class="col-sm-9">{{ $equipment->specs }}</dd>

            <dt class="col-sm-3">Category</dt>
            <dd class="col-sm-9">{{ $equipment->category }}</dd>

            <dt class="col-sm-3">Manufacturer ID</dt>
            <dd class="col-sm-9">{{ $equipment->manufacturer_id }}</dd>
        </dl>
    </div>
@stop
