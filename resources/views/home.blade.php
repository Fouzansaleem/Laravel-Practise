@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home Page</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a type="submit"  class="btn btn-primary"  href="{{ route('post.create') }}" > Create New Post</a>

                        <a type="submit" style="float: right" class="btn btn-primary"  href="{{ route('post.index') }}" > Your Post</a>
                        <br>
                        <br>


                                <table class="table table-bordered">
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created By</th>
                                        <th width="400px">Action</th>
                                    </tr>
                                    @if (count($posts)>0)
                                        @foreach($posts->all() as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->description }}</td>
                                    <td>{{ $post->creator->name }}</td>

                                    <td>

                                        <a class="btn btn-success" href="{{ route('post.show',$post->id) }}">Show</a>

                                    </td>
                                </tr>
                                    @endforeach
                                    @else
                                        <h2>No Posts is Created</h2>
                                    @endif
                                </table>
                                {{--{{$posts->render()}}--}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
