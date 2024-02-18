@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">We Repair and Clean It All!</h1>
    <p class="text-center mb-5">Choose your smartphone type to explore our services:</p>
    <div class="smartphone-gallery">
        <div class="row">
            @foreach ($smartphones as $smartphone)
                <div class="col-md-4 col-sm-6 smartphone-card">
                    <div class="card">
                        <img src="/images/{{ $smartphone->image }}" alt="{{ $smartphone->device_name }}" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">{{ $smartphone->device_name }}</h3>
                            <p class="card-text">Date released: {{ $smartphone->release_date }}</p>
                            <a href="" class="btn btn-primary">See {{ $smartphone->device_name }} Services</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
