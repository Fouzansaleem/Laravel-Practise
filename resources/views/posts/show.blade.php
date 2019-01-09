@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

					<div class="container">
					<h2>Post Detail</h2><br>

<div>
<a class="btn btn-link" href="{{ route('post.index') }}">Go Back</a><br>
</div>
<br/>

		Title: {{ $post->title }}<br>
		Description: {{ $post->description }}<br>




</div>
</div>
</div>
</div>
@endsection