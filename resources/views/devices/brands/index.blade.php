@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">We Repair and Clean It All!</h1>
    <p class="text-center mb-5">Choose your smartphone type to explore our services:</p>
    <div class="smartphone-gallery">
        <div class="row">
            @foreach ($brands as $brand)
                <div class="col-md-4 col-sm-6 smartphone-card">
                    <div class="card">
                        <img src="/images/{{ $brand->image }}" alt="{{ $brand->brand_name }}" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">{{ $brand->brand_name }}</h3>
                            <a href="/home/brands/{{$brand->id}}" class="btn btn-primary">See {{ $brand->brand_name}} Services</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
