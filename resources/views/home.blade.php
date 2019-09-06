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
                    <h2><span class="text-success">Congratulation!</span></h2>
                     You set the variable foo on session and the value is {{ session()->get('foo') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
