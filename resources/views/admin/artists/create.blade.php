@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Create Artist')

@section('navbar')
    @include('components.navbarAdmin')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <section class="create-artist-container">
        <div class="pt-3 px-4">
            <form method="POST" action="{{route('artists_resource.store')}}" id="form-create-artist" class="needs-validation" novalidate>
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="artist__name">Artist Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter artist name..." id="artist__name" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Artist name is required!</div>
                        @error('name')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="date-birth-artist">Date Of Birth</label>
                        <input type="date" class="form-control" value="{{old('date_of_birth')}}" name="date_of_birth" id="date-birth-artist" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Date of birth is required!</div>
                        @error('date_of_birth')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="artist-description">Description</label>
                        <textarea class="form-control w-100" name="description" id="artist-description" placeholder="About artist" required>{{old('description')}}</textarea>
                        <div class="invalid-feedback">
                            Please enter a brief description about artist.
                        </div>
                        @error('description')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </section>
@endsection
@section('script_tag')
    <script>
        CKEDITOR.replace( 'artist-description' );

    </script>
@endsection
