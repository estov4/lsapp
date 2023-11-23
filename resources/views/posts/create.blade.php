@extends('layouts.app')


@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action'=> 'App\Http\Controllers\PostsController@store','method'=> 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Name')}}
        {{Form::text('title','',['class'=>'form-control', 'placeholder'=> 'Title'])}}
    </div> 

        {{-- date time picker --}}

        <div class="container mt-5" style="max-width: 450px">
            <h2 class="mb-4">When</h2>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
            </div>
    </div>


        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
        </head>
        <body>
        
        </body>
              
    </html>
      


    <script type="text/javascript">
        $('.date').datepicker({  
           format: 'mm-dd-yyyy'
         });  
    </script>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=>'ckeditor form-control', 'placeholder'=> 'Body'])}}
    </div> 
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
