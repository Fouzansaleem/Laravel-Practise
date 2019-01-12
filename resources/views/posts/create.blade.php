@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Posts</div>

                    <div class="panel-body">
                        <h2>Create Posts</h2><br>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        {!! Form::open(array('route' => 'post.store','method'=>'POST')) !!}

                        Title:<br>
                        <input type="text" name="title"><br>
                        Description:<br>
                        <input type="text" name="description"><br><br>

                        <input type="submit" class="btn btn-primary" value="Submit" >
                        <a type="submit"  href="{{ route('post.index') }}">Cancel</a><br>

                        {!! Form::close() !!}
                        <br>



                    </div>
                </div>
            </div>
        </div>
@endsection