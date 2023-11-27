<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action'=> 'App\Http\Controllers\PostsController@store','method'=> 'POST', 'enctype' => 'multipart/form-data']) !!}
    
    <div class="form-group">
        {{Form::label('title','Name')}}
        {{Form::text('title','',['class'=>'form-control', 'placeholder'=> 'Title'])}}
    </div>

    <!-- Include partial views -->
    @include('layouts.datetimepicker')
    @include('layouts.map')

    <!-- Existing form fields... -->

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=>'ckeditor form-control', 'placeholder'=> 'Body'])}}
    </div> 
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    
    {!! Form::close()!!}

    <!-- Include scripts partial view -->
    @include('layouts.scripts')
    
@endsection
