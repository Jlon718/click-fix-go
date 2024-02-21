@extends('layouts.base')
@section('body')
<div class="container">
    {!! Form::model($smartphone, ['route' => ['smartphones.update', $smartphone->id], 'class' => 'form-control',  'files' => true, 'method' => 'put']) !!}
    {{ Form::label('device_name', 'Device Name', ['class' => 'form-control']) }}
    {!! Form::text('device_name', $smartphone->device_name) !!}
    {{ Form::label('brand_id', 'Brand name', ['class' => 'form-control']) }}
    {{ Form::select('brand_id', $brands, $brand->id, ['class' => 'form-select', 'aria-label' => 'Default select example']) }}
    {{ Form::label('release_date', 'Release date', ['class' => 'form-control']) }}
    {!! Form::date('release_date', $smartphone->release_date) !!}
    {{ Form::label('device_type_id', 'Device type', ['class' => 'form-control']) }}
    {{ Form::select('device_type_id', $devices, $device->id, ['class' => 'form-select', 'aria-label' => 'Default select example']) }}
    {!! Form::file('image', ['class' => 'form-control']) !!}
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <img src="{{ url($smartphone->image) }}" alt="{{$smartphone->device_name}} image" width="50" height="50">
    {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}     
    {!! Form::close() !!}
</div>
@endsection
