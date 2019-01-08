@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Posts</div>

          <div class="container">
          <h2>Your Posts</h2>
<div align="center">
  <a type="submit" class="btn btn-primary" href="{{ route('post.create') }}" > Create New Post</a>
</div>


<table>
  <tr>
    <th>Title</th>
    <th>Description</th>
    <th width="280px">Action</th>
  </tr>
  @foreach($posts as $key =>$post)
  <tr>
    <td>{{ $post->title }}</td>
    <td>{{ $post->description }}</td>
  <td>
  <a href="{{ route('post.show',$post->id) }}">Show</a>
  <a href="{{ route('post.edit',$post->id) }}">Edit</a>
  {!! Form::open(['method'=>'DELETE','route'=>['post.destroy',$post->id],'style'=>'display:inline']) !!}
  {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
  {!! Form::close() !!}
</td>
</tr>
@endforeach
</table>






</div>
</div>
</div>
</div>
@endsection