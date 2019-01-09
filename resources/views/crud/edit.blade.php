@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>

					<div class="container">
					<h2>Edit Post</h2><br>

{!! Form::model($post,['method'=>'PATCH','route'=>['post.update',$post->id]]) !!}
Title:<br>
{!! Form::text('title',null,array()) !!}<br>
Description:<br>
{!! Form::text('description',null,array()) !!}<br>
<br>
<input type="submit" value="Submit" class="btn btn-primary" >
<a class="btn btn-warning" href="{{ route('post.index') }}">Go Back</a><br>

{!! Form::close() !!}

<br>

</div>
</div>
</div>
</div>
</div>
@endsection