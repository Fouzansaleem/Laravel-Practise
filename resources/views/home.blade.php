@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Home Page</h1>
                    Congratulation.
                    You are logged in !<br><br>
                    
                    <a type="submit" class="btn btn-primary" href="post"> Yours Posts</a>
    
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
