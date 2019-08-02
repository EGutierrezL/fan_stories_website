@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <h3 class="panel-tittle">Welcome {{ auth()->user()->name }}</h3>
                </div>
                <div class="col-md-4 col-md-offset-4">
                                      
                    <strong>Email: </strong> {{ auth()->user()->email }}
                    
                </div>
                <div class="card-footer">             
                    <form method="POST" action="{{ route('logout') }}">
                    {{ csrf_field() }}
                    <button class="btn btn-danger btn-xs btn-block"> Close Session </button>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
