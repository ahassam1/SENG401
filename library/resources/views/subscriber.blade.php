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

                    You are logged in the Subscriber section! <br>
                    Welcome {{Auth::user()->name}}! <br>
                    Your ID on this system is {{Auth::user()->id}}. <br>
                    Your role is <span style="color:blue"> {{Auth::user()->role}}.

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
