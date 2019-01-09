@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Post Detail</div>

                    <div class="container">
                        <h2>Post Detail</h2><br>



                        <b>Title:</b> {{ $post->title }}<br>
                        <b>Description:</b> {{ $post->description }}<br>

                        <br>

                        <a type="submit"class="btn btn-primary" href="{{ route('post.index') }}">Back</a><br>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection