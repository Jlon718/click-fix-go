@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">We Repair and Clean It All!</h1>
    <p class="text-center mb-5">Choose your device type to explore our services:</p>
    <div class="device-gallery">
        @php
            $devices = [
                ['image' => 'laptop.png', 'title' => 'Laptop', 'description' => 'Expert repairs for all major brands and models.', 'link' => '/laptops'],
                ['image' => 'cellphone.png', 'title' => 'Cellphone', 'description' => 'Cracked screens, battery replacements, and more for your mobile device.', 'link' => '/cellphones'],
                ['image' => 'tablet.png', 'title' => 'Tablet', 'description' => 'Get your tablet back to peak performance with our expert repairs.', 'link' => '/tablets'],
                ['image' => 'mac.png', 'title' => 'Mac', 'description' => 'We specialize in repairs and cleaning for all Apple Mac devices.', 'link' => '/macs'],
            ];
        @endphp
        <div class="row">
            @foreach ($devices as $device)
                <div class="col-md-4 col-sm-6 device-card">
                    <div class="card">
                        <img src="/images/{{ $device['image'] }}" alt="{{ $device['title'] }}" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">{{ $device['title'] }}</h3>
                            <p class="card-text">{{ $device['description'] }}</p>
                            <a href="/home/smartphones" class="btn btn-primary">See {{ $device['title'] }} Services</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
