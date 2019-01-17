@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Posts</div>

                <div class="panel-body">
                         <h2>Your Posts
                                <a type="submit" style="float: right" class="btn btn-primary" href="{{ route('home') }}" > Home</a> 
                        </h2>
                        <div align="center">
                         <a type="submit"  class="btn btn-primary"  href="{{ route('post.create') }}" > Create New Post</a>
                             </div>    
                                   @if ($message = Session::get('success'))
                                  <div class="alert alert-success" align="center">
                                   {{ $message }}
                                  </div>
                                      @endif
                           <div>
                            <br>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created By</th>
                                    <th width="400px">Action</th>
                                </tr>
                                @if (count($posts)>0)
                                @foreach($posts as $key =>$post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->description }}</td>
                                        <td>{{ $post->user_id }}</td>
                                        <td>

                                            <a class="btn btn-success" href="{{ route('post.show',$post->id) }}">Show</a>
                                            <a class="btn btn-warning" href="{{ route('post.edit',$post->id) }}">Edit</a>
                                            {!! Form::open(['method'=>'DELETE','route'=>['post.destroy',$post->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                    @else
                                <h4>NO posts </h4>
                                    @endif
                            </table>
                            </div>                                
                             <br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


