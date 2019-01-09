@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Posts</div>

          <div class="container">
          <h2>Your Posts</H2> 
          <div class="col-md-offset-5">
            <a type="submit" class="btn btn-primary" href="{{ route('post.create') }}" > Create New Post</a>
            
          </div>                                         
<br>

<div class="container">
<table class="table table-bordered">

  <tr>
    <th>Title</th>
    <th>Description</th>
    <th width="800px">Action</th>
  </tr>

  @foreach($posts as $key =>$post)
  <tr>
    <td>{{ $post->title }}</td>
    <td>{{ $post->description }}</td>
  <td>
  <a class="btn btn-success" href="{{ route('post.show',$post->id) }}">Show</a>
  <a class="btn btn-warning" href="{{ route('post.edit',$post->id) }}">Edit</a>
  {!! Form::open(['method'=>'DELETE','route'=>['post.destroy',$post->id],'style'=>'display:inline']) !!}
  {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
  {!! Form::close() !!}
</td>
</tr>

@endforeach
</table>
</div>
<a type="submit" class="btn btn-primary" href="{{ route('home') }}" > Home</a>

</div>
<br>
</div>
</div>
</div>
</div>
@endsection