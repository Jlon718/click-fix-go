{{-- @extends('layouts.base')
@section('body')
<div class="container">
    {{dd($brands)}};
    {!! Form::open(['route' => 'smartphones.store', 'class' => 'form-control', 'enctype' => 'multipart/form-data']) !!}
    {{ Form::label('device_name', 'Last Name', ['class' => 'form-control']) }}
    {!! Form::text('device_name') !!}
    {{ Form::label('brand_id', 'Brand name', ['class' => 'form-control']) }}
    {{ Form::select('brand_id', $brands->pluck('brand_name', 'id'), null, ['class' => 'form-select', 'aria-label' => 'Default select example']) }}
    {{ Form::label('release_date', 'Release date', ['class' => 'form-control']) }}
    {!! Form::date('release_date') !!}
    {{ Form::label('device_type_id', 'Device type', ['class' => 'form-control']) }}
    {{ Form::select('device_type_id', $devices->pluck('device_type', 'id'), null, ['class' => 'form-select', 'aria-label' => 'Default select example']) }}
    {!! Form::file('image', ['class' => 'form-control']) !!}
    @error('img_path')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}     
    {!! Form::close() !!}
</div>
@endsection --}}
@extends('base')
@section('body')
    {{-- {{dd($albums)}} --}}
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <div class="container-fluid">
        <form action="{{ route('songs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Song title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="song Name" name="title" value="{{old('title')}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">description</label>
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
