@extends('layouts.base')
@section('body')
<div class="container">
    {!! Form::open(['route' => 'smartphones.store', 'class' => 'form-control', 'enctype' => 'multipart/form-data']) !!}
    {{ Form::label('device_name', 'Device Name', ['class' => 'form-control']) }}
    {!! Form::text('device_name') !!}
    {{ Form::label('brand_id', 'Brand name', ['class' => 'form-control']) }}
    {{ Form::select('brand_id', $brands->pluck('brand_name', 'id'), null, ['class' => 'form-select', 'aria-label' => 'Default select example']) }}
    {{ Form::label('release_date', 'Release date', ['class' => 'form-control']) }}
    {!! Form::date('release_date') !!}
    {{ Form::label('device_type_id', 'Device type', ['class' => 'form-control']) }}
    {{ Form::select('device_type_id', $devices->pluck('device_type', 'id'), null, ['class' => 'form-select', 'aria-label' => 'Default select example']) }}
    {!! Form::file('image', ['class' => 'form-control']) !!}
    @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}     
    {!! Form::close() !!}
</div>
@endsection
