@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Post Detail</div>

                    <div class="panel-body">
                        <h2>Post Detail
                            <a type="submit" style="float: right" class="btn btn-primary"
                               href="{{ route('post.index') }}">Back</a>
                        </h2><br>


                        <b>Title:</b> {{ $post->title }}<br>
                        <b>Description:</b> {{ $post->description }}<br>

                        <br>
                        <div class="panel-footer">
                            <h4><b>COMMENTS</b></h4>
                            <ul>
                                @foreach($post->comments as $comment)
                                    <li>
                                        {{ $comment->comment}}<br>
                                        <strong> {{ $comment->user->name }} </strong>
                                        {{\carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @guest
                            <button class="btn btn-danger"><a href="/login">Login to comment</a></button>
                        @else

                            <div class="Add comment">
                                <h4>Add Comment</h4>
                                <form method="POST" action="{{ route('comment.store') }}">
                                    <input type="hidden" name="post_id" value="{{ $post->id }}"/>
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="comment" required/>
                                    </div>
                                    <div>

                                        <input type="submit" class="btn btn-warning" value=" Comment" required/>
                                    </div>
                                </form>
                            </div>
                        @endguest


                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection