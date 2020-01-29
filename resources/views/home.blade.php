@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">User Dashboard</div>

                    <div class="panel-body">
                        @component('components.who-is-logged-in',['products'=>$products])
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
