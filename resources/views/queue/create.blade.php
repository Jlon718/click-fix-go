@extends('layouts.base')
@section('body')
<div class="container">
    {!! Form::open(['route' => 'queue.store', 'class' => 'form-control', 'method' => 'post']) !!}
    {!! Form::hidden('date_placed', \Carbon\Carbon::now(), ['style' => 'display: none;']) !!}
    {!! Form::hidden('customer_id', '1') !!}
    {{ Form::label('customer_name', 'Customer Name', ['class' => 'form-control']) }}
    {!! Form::text('customer_name') !!}
    {{ Form::label('scheduled_date', 'Date of appointment', ['class' => 'form-control']) }}
    {!! Form::date('scheduled_date') !!}
    @foreach($deviceServices as $deviceService)
    <br>
    {{ Form::label('device_type', 'Device type: ', ['class' => 'form-control']) }}
    {!! Form::text('device_type[]', $deviceService->device_type, ['readonly' => 'readonly']) !!}
    {!! Form::hidden('device_id', $deviceService->device_id) !!}
    @break
    @endforeach
    {{ Form::label('service_type', 'Service type', ['class' => 'form-control']) }}
    @foreach($deviceServices as $deviceService)
    <div>
        {{ Form::checkbox('service_id[]', $deviceService->service_id, null, ['id' => 'service_'.$deviceService->service_id]) }}
        {{ Form::label('service_'.$deviceService->service_id, $deviceService->service_type) }}
    </div>
   @endforeach
    {!! Form::hidden('technician_id', null) !!}
    {!! Form::hidden('technician_name', null) !!}
    {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}     
    {!! Form::close() !!}
</div>
@endsection
