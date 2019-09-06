@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if(session()->has('foo-warning'))
                            <p class="alert alert-warning">{{ session()->get('foo-warning') }}</p>
                        @endif

                        <form method="post" action="{{ route('setfoo.set') }}">
                            @csrf
                            <div class="form-group">
                                <label for="set-foo">Set Foo</label>
                                <input type="text" class="form-control" name="foo_data" id="set-foo"  placeholder="Enter foo">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
