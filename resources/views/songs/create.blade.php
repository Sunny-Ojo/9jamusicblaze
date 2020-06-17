@extends('layouts.nav')

{{-- @section('titleHeader', 'Upload your songs stress-free.') --}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header text-center"><h4>Upload your songs stress-free.</h4></div>
                    <div class="card-body">
                    <form action="{{route('songs.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Enter name of song</label>
        <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control">
        @error('name') <li class="text-danger">{{$message}}</li>@enderror
        </div>
        <div class="form-group">
            <label for="artist">Enter name of Artist</label>
        <input type="text" name="artist" value="{{old('artist')}}" id="artist" class="form-control">
        @error('artist') <li class="text-danger">{{$message}}</li>@enderror
        </div>
        <div class="form-group">
            <label for="about_song">Enter Short description of song</label>
                    <input type="text" value="{{old('about_song')}}" name="about_song" id="about_song" class="form-control">
                    @error('about_song') <li class="text-danger">{{$message}}</li>@enderror

        </div>
        <div class="form-group">
            <label for="about_artist">Enter Short description of Artist(s)</label>
                    <input type="text" value="{{old('about_artist')}}" name="about_artist" id="about_artist" class="form-control">
                    @error('about_artist') <li class="text-danger">{{$message}}</li>@enderror

        </div>
        <div class="form-group">
            <label for="category">Category</label>
                    <input type="text" value="{{old('category')}}" name="category" id="category" class="form-control">
                    @error('category') <li class="text-danger">{{$message}}</li>@enderror

        </div>
        <div class="form-group">
            <label for="cover_image">Upload Song Cover Image</label>
                    <input type="file" name="cover_image" id="cover_image" class="form-control">
                    @error('cover_image') <li class="text-danger">{{$message}}</li>@enderror

        </div>
        <div class="form-group">
            <label for="song">Upload the Song </label>
                    <input type="file" name="song" id="song" class="form-control">
                    @error('song') <li class="text-danger">{{$message}}</li>@enderror

        </div>
<div class="form-group">
    <input type="submit" value="Upload Song" name="submit" id="" class="btn btn-block btn-outline-primary">

</div>
    </form>
                    </div>
                    <div class="card-footer text-center">We are here to serve you better</div>
                </div>
            </div>
        </div>


    </div>
@endsection
