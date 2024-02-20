@extends('layouts.base')
@section('body')
<div class="container-fluid">
    <form action="{{ route('smartphone.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="device name">Device Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Device name" name="device_name">
            @error('device_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Brand</label>

            
            <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="genre"
                name="description" value="{{old('description')}}">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <select class="form-select" aria-label="Default select example" name="album_id" >
            <option selected >Select an Album</option>
            @foreach ($albums as $album)
                <option value="{{ $album->id }}">{{ $album->title }}</option>
            @endforeach


        </select>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="{{ route('album.index') }}" role="button" aria-disabled="true">cancel</a>
    </form>
</div>

@endsection