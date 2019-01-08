@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Posts</div>

					<div class="container">
					<h2>Your Posts</h2><br>


{!! Form::open(array('route' => 'post.store','method'=>'POST')) !!}

Title:<br>
<input type="text" name="title"><br>
Description:<br>
<input type="text" name="description"><br><br>
<input type="submit" class="btn btn-primary" value="Submit" >

<a type="submit"  href="{{ route('post.index') }}">Cancel</a><br>

{!! Form::close() !!}




</div>
</div>
</div>
</div>
@endsection